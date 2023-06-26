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
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),]);

        User::create([
            'name' => 'raghad',
            'email' => 'raghad@gmail.com',
            'password' => Hash::make('raghad'),]);

        User::create([
            'name' => 'yousef',
            'email' => 'yousef@gmail.com',
            'password' => Hash::make('yousef'),]);

        User::create([
            'name' => 'rahaf',
            'email' => 'rahaf@gmail.com',
            'password' => Hash::make('rahaf'),]);

        DB::table('user_roles')->insert([
            'role_id'=>1,'user_id' =>1]);
    }
}