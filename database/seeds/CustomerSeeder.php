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
            'DateOfBirth' => '2021-03-10',
            'Gender' => 'Male',
            'Email' => 'user2@gmail.com',
            'ContactNumber' => '0701234567',
            'password' => Hash::make('123456789')
        ],
        [
                    'FirstName' => 'ab',
                    'LastName' => 'ab',
                    'DateOfBirth' => '2021-04-10',
                    'Gender' => 'Male',
                    'Email' => 'user3@gmail.com',
                    'ContactNumber' => '0701234567',
                    'password' => Hash::make('123456789')
         ],
         [
                      'FirstName' => 'abcd',
                      'LastName' => 'abcd',
                      'DateOfBirth' => '2021-04-10',
                      'Gender' => 'Male',
                      'Email' => 'user4@gmail.com',
                      'ContactNumber' => '0701234567',
                      'password' => Hash::make('123456789')
          ],
          [
                      'FirstName' => 'bc',
                      'LastName' => 'bc',
                      'DateOfBirth' => '2021-04-10',
                      'Gender' => 'Female',
                      'Email' => 'user5@gmail.com',
                      'ContactNumber' => '0701234567',
                      'password' => Hash::make('123456789')
           ],
          [
                      'FirstName' => 'abc',
                      'LastName' => 'abc',
                      'DateOfBirth' => '2021-04-10',
                      'Gender' => 'Female',
                      'Email' => 'user6@gmail.com',
                      'ContactNumber' => '0701234567',
                      'password' => Hash::make('123456789')
           ]
        ]);
    }
}
