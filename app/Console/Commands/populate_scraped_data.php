<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Tag;
use App\Models\Website;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class populate_scraped_data extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'populate:imperfect_copies';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Populate the datas obtained from the web scraper\'s JSON.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Reading files...');
        $path_to_site_json = storage_path('app/translated_site_datas.json');
        $path_to_user_json = storage_path('app/translated_user_datas.json');
        $sites = json_decode(file_get_contents($path_to_site_json), true);
        $users = json_decode(file_get_contents($path_to_user_json), true);
        // $this->info('Populating users...');
        // foreach ($users as $user) {
        //     try {
        //         User::create([
        //             'name' => $user['user_name'],
        //             'display_name' => $user['display_name'],
        //             'email' => 'user'.$user['id'].'@gmail.com',
        //             'password' => Hash::make('ABcd@1234'),
        //             'description' => 'I am user'.$user['id'].'.',
        //             'image_link' => $user['profile_picture'],
        //             'user_link' => $user['user_link'],
        //             'type' => 0,
        //             'rank' => 0,
        //             'status_points' => 0,
        //             'created_at' => now()
        //         ]);
        //     } catch (QueryException $e) {
        //         $this->info(string: "Failed to create user: $e");
        //     }
        // }
        // $this->info('Populated users!\n');

        $this->info('May God spare my soul... Populating sites and its components...');
        foreach ($sites as $site) {
            $user_id = User::where('user_link', $site['authors'][0][0])->firstOrFail()->id;
            try {
                $new_website = Website::create([
                    'user_id' => $user_id,
                    'name' => $site['name'],
                    'description' => $site['description'],
                    'link' => $site['link'],
                    'image_link' => $site['image_link'],
                    'created_at' => now()
                ]);
            } catch (QueryException $e) {
                $this->info('Failed to create website!');
                continue;
            }

            foreach ($site['award'] as $award) {
                $award_name = $award['award'];
                if ($award_name == 'Honorable Mention') {
                    $award_type = 1;
                } elseif ($award_name == 'Site Of The Day') {
                    $award_type = 2;
                } elseif ($award_name == 'Site Of The Month') {
                    $award_type = 3;
                } elseif ($award_name == 'Site Of The Year') {
                    $award_type = 4;
                } elseif ($award_name == 'Developer Award') {
                    $award_type = 5;
                } else {
                    $award_type = 6;
                }
                try {
                    $new_website->awards()->create([
                        'type' => $award_type,
                        'awarded_date' => $award['awarded_time'] ?? now()
                    ]);
                } catch (QueryException $e) {
                    $this->info($e);
                }
            }

            foreach ($site['authors'] as $author) {
                if ($author != $site['authors'][0]) {
                    try {
                        $collaborator = User::where('user_link', $author[0])->firstOrFail()->id;
                        $new_website->collaborators()->syncWithoutDetaching($collaborator);
                    } catch (ModelNotFoundException $e) {
                        $this->info('User not found for collaborator...');
                        continue;
                    }
                }
            }
            
            foreach ($site['elements'] as $element) {
                try {
                    $new_website->elements()->create([
                        'name' => $element['name'] != '' ? $element['name'] : rand(1, 1000000000),
                        'image_link' => $element['image_link']
                    ]);
                } catch (QueryException $e) {
                    $this->info($e);
                }
            }

            foreach ($site['tags'] as $tag) {
                try {
                    $new_tag = Tag::firstOrCreate([
                        'name' => $tag
                    ]);
                } catch (QueryException $e) {
                    $this->info($e);
                }
                $new_website->tags()->syncWithoutDetaching($new_tag->id);
            }

            foreach ($site['votes'] as $vote) {
                if ($vote['user'] != 'https://www.awwwards.com/') {
                    try {
                        $user_id = User::where('user_link', $vote['user'])->firstOrFail()->id;
                        $new_website->website_votes()->syncWithoutDetaching([
                            $user_id => [
                                'is_rejected' => $vote['is_rejected'] == 1,
                                'design' => $vote['scores'][0],
                                'usability' => $vote['scores'][1],
                                'creativity' => $vote['scores'][2],
                                'content' => $vote['scores'][3]
                            ]
                        ]);
                    } catch (ModelNotFoundException $e) {
                        $this->info('User not found for vote...');
                        continue;
                    }
                }
            }

            foreach ($site['dev_votes'] as $vote) {
                if ($vote['user'] != 'https://www.awwwards.com/') {
                    try {
                        $user_id = User::where('user_link', $vote['user'])->firstOrFail()->id;
                        $new_website->user_votes()->syncWithoutDetaching([
                            $user_id => [
                                'is_rejected' => $vote['is_rejected'] == 1,
                                'semantics' => $vote['scores'][0],
                                'animations' => $vote['scores'][1],
                                'accessibility' => $vote['scores'][2],
                                'wpo' => $vote['scores'][3],
                                'responsive_design' => $vote['scores'][4],
                                'markup' => $vote['scores'][5]
                            ]
                        ]);
                    } catch (ModelNotFoundException $e) {
                        $this->info('User not found for vote...');
                        continue;
                    }
                }
            }
        }
        $this->info('Populated sites!');
        $this->info('Finished.');
    }
}
