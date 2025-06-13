<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Award;
use App\Models\Tag;
use App\Models\WebsiteElement;
use App\Models\UserVote;
use App\Models\Website;
use App\Models\WebsiteVote;
use Illuminate\Support\Facades\Storage;

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
        $this->info('Reading files...\n');
        $path_to_site_json = storage_path('app/translated_site_datas.json');
        $path_to_user_json = storage_path('app/translated_user_datas.json');
        $sites = json_decode(file_get_contents($path_to_site_json), true);
        $users = json_decode(file_get_contents($path_to_user_json), true);
        $this->info('Populating...\n');
    }
}
