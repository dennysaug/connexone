<?php

use App\Microservice;
use Illuminate\Database\Seeder;

class MicroserviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Microservice::insert([
            [
                'name' => 'Microservice A',
                'url' => 'http://service-a.localhost/',
            ],
            [
                'name' => 'Microservice B',
                'url' => 'http://service-b.localhost/',
            ],
            [
                'name' => 'Microservice C',
                'url' => 'http://service-c.localhost/',
            ],
        ]);
    }
}
