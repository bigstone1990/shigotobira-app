<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            [
                'name' => '管理者１',
                'kana' => 'カンリシャ１',
                'email' => 'admin1@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => '管理者２',
                'kana' => 'カンリシャ２',
                'email' => 'admin2@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => '管理者３',
                'kana' => 'カンリシャ３',
                'email' => 'admin3@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => '管理者４',
                'kana' => 'カンリシャ４',
                'email' => 'admin4@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => '管理者５',
                'kana' => 'カンリシャ５',
                'email' => 'admin5@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => '管理者６',
                'kana' => 'カンリシャ６',
                'email' => 'admin6@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => '管理者７',
                'kana' => 'カンリシャ７',
                'email' => 'admin7@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => '管理者８',
                'kana' => 'カンリシャ８',
                'email' => 'admin8@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => '管理者９',
                'kana' => 'カンリシャ９',
                'email' => 'admin9@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => '管理者１０',
                'kana' => 'カンリシャ１０',
                'email' => 'admin10@test.com',
                'password' => Hash::make('password'),
            ],
        ]);

        Admin::factory(100)->create();
    }
}
