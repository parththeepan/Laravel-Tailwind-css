<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customers')->insert([
        [
            'FirstName' => 'user',
            'LastName' => 'user',
            'DateOfBirth' => '2021-05-10',
            'Gender' => 'Male',
            'Email' => 'user1@gmail.com',
            'ContactNumber' => '0701234567',
            'password' => Hash::make('123456789')
        ],
        [
            'FirstName' => 'abc',
            'LastName' => 'abc',
            'DateOfBirth' => '2021-04-10',
            'Gender' => 'Male',
            'Email' => 'user2@gmail.com',
            'ContactNumber' => '0701234567',
            'password' => Hash::make('123456789')
        ]
        ]);
    }
}
