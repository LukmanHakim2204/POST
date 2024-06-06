<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = new User();
        $users->name = 'Lukman Hakim';
        $users->email = 'lukmanhakim@gmail.com';
        $users->password = bcrypt('admin1');
        // $users->role = 'admin';
        $users->save();
    }
}
