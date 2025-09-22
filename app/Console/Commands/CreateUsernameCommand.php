<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;

class CreateUsernameCommand extends Command
{ 
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {username} {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user with username, email, and password.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $username = $this->argument('username');
        $email = $this->argument('email');
        $password = $this->argument('password');

        User::create([
            'name' => $username, // You might use username as name or ask for a separate name
            'username' => $username,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $this->info("User {$username} created successfully.");
    }
}
