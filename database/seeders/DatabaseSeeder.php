<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::create([
             'name' => 'Amon',
             'email' => "amon_amonov@bk.ru",
             'isAdmin' => 1,
             'balance' => 1500,
             'password' => Hash::make("amon123123"),
             'country' => 0,
             'phone' => 112,
             'city' => 'Казань',
             'zip' => 123123,
             'address' => 123123,
             'type' => 1,
             'org' => '123123',
             'org_type' => 1
         ]);
    }
}
