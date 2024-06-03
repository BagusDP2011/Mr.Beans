<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'john_doe',
            'fullName' => 'John Doe',
            'email' => 'john@example.com',
            'alamat' => '123 Main St',
            'noHp' => '1234567890',
            'role' => 'admin',
        ]);
        // Tambahkan data lain sesuai kebutuhan
    }
}
