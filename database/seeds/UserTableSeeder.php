<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
            'name' => 'Octavius Young',
            'email' => 'octay@young.com',
            'password' => bcrypt('password'),
       ]);

       User::create([
        'name' => 'Pentavius Young',
        'email' => 'Pentay@young.com',
        'password' => bcrypt('password'),
   ]);
    }
}
