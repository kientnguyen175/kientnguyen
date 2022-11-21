<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class CreateAuthor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'author:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new author';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $username = $this->ask('Type username');
        $password = config('basic_auth.default_password');
        $name = config('basic_auth.default_name');

        $theUserExists = User::where('username', $username)->first();
        if (!$theUserExists) {
            $user = User::create([
                'name' => $name,
                'username' => $username,
                'password' => Hash::make($password),
            ]);
            $authorRole = Role::firstOrCreate([
                'name' => 'author',
            ]);
            $user->assignRole($authorRole->name);

            $this->info('Successful account registration!');
        } else {
            $this->error('The username already exists!');
        }

        return 0;
    }
}
