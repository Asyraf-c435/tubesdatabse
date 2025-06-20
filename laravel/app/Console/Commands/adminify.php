<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class adminify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Promote a user to admin by username';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('Enter the username (name column) to promote to admin');

        $user = User::where('name', $name)->first();

        if (!$user) {
            $this->error("User '{$name}' not found.");
            return 1;
        }

        $user->is_admin = true;
        $user->save();

        $this->info("User '{$user->name}' has been promoted to admin.");
        return 0;
    }
}
