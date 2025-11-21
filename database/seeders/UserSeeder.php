<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'ユーザー１',
                'kana' => 'ユーザー１',
                'email' => 'user1@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'ユーザー２',
                'kana' => 'ユーザー２',
                'email' => 'user2@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'ユーザー３',
                'kana' => 'ユーザー３',
                'email' => 'user3@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'ユーザー４',
                'kana' => 'ユーザー４',
                'email' => 'user4@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'ユーザー５',
                'kana' => 'ユーザー５',
                'email' => 'user5@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'ユーザー６',
                'kana' => 'ユーザー６',
                'email' => 'user6@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'ユーザー７',
                'kana' => 'ユーザー７',
                'email' => 'user7@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'ユーザー８',
                'kana' => 'ユーザー８',
                'email' => 'user8@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'ユーザー９',
                'kana' => 'ユーザー９',
                'email' => 'user9@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'ユーザー１０',
                'kana' => 'ユーザー１０',
                'email' => 'user10@test.com',
                'password' => Hash::make('password'),
            ],
        ]);

        User::factory(100)->create();
    }
}
