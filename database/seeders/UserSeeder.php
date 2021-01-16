<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = User::create([
            'name' => 'Manager',
            'email' => 'manager@cafe.id',
            'password' => bcrypt('12345678')
        ]);
        $manager->assignRole('manager');

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@cafe.id',
            'password' => bcrypt('12345678')
        ]);
        $admin->assignRole('admin');

        $meja1 = User::create([
            'name' => 'Meja 1',
            'email' => 'meja1@cafe.id',
            'password' => bcrypt('12345678')
        ]);
        $meja1->assignRole('meja');

        $meja2 = User::create([
            'name' => 'Meja 2',
            'email' => 'meja2@cafe.id',
            'password' => bcrypt('12345678')
        ]);
        $meja2->assignRole('meja');
    }
}
