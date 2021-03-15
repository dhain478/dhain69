<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Angela',
                'address' => 'Ligua69',
                'phone' => '09033434343',
                'capitalization' => 70000,
                'loan' => 40000
            ],
            [
                'name' => 'Budok',
                'address' => 'Kauswagan',
                'phone' => '0943493434',
                'capitalization' => 50000,
                'loan' => 300000
            ],
            [
                'name' => 'Perfecto',
                'address' => 'Cancunay',
                'phone' => '094834343434',
                'capitalization' => 50000,
                'loan' => 200000
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
