<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
           'created_at' => \Carbon\Carbon::now(),
           'username' => 'admin',
            'image' => '',
            'first_name' => 'test',
            'last_name' => 'test1',
            'email' => 'test@gmail.com',
            'password' => bcrypt('admin'),
            'status' => '1',
        ]);
    }
}
