<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin LookCreative',
            'email' => 'admin@lookcreative.id',
            'password' => bcrypt('password')
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User LookCreative',
            'email' => 'user@lookcreative.id',
            'password' => bcrypt('password')
        ]);
        $user->assignRole('user');
    }
}
