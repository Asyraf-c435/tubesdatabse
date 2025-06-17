<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;

class new_admin_user extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:admin-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new admin user.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('Enter username');
        $email = $this->ask('Enter email');
        $password = $this->secret('Enter password');
        $confirm_password = $this->secret('Confirm password');
        $validated = Validator::make([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $confirm_password,
        ], [
            'name' => 'required|unique:app_users,name|max:255',
            'email' => 'required|email|unique:app_users,email',
            'password' => ['required', 'confirmed', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
        ]);

        if ($validated->fails()) {
            $this->error('Validation errors:');
            foreach ($validated->errors()->all() as $error) {
                $this->error($error);
            }
            return 1;
        }

        $user = User::create([
            'name' => $name,
            'display_name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'description' => null,
            'image_link' => 'images/profile/default.png',
            'user_link' => null,
            'country_id' => null,
            'subscription_id' => null,
            'twitter' => null,
            'facebook' => null,
            'linkedin' => null,
            'instagram' => null,
            'tiktok' => null,
            'type' => 1,
            'rank' => 0,
            'status_points' => 0,
            'created_at' => now()
        ]);

        $this->info('Admin account created successfully!');
        $this->line("Name: {$user->name}");
        $this->line("Email: {$user->email}");
        $this->line("Type: {$user->type} (Admin)");

        return 0;
    }
}
