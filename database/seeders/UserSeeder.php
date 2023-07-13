<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataset = [
            [
                "name" => "admin",
                "email" => "admin@admin.com",
                "password" => "admin",
            ]
        ];
        foreach ($dataset as $value) {
            User::create([
                "name" => $value["name"],
                "email" => $value["email"],
                "password" => Hash::make($value["password"]),
            ]);
        }
    }
}
