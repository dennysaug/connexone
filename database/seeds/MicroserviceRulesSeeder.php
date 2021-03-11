<?php

use App\Microservice;
use App\MicroserviceRules;
use Illuminate\Database\Seeder;

class MicroserviceRulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rules = [];
        $microservices = Microservice::orderBy('id', 'asc')->get(); //microservice A, microservice B, microservice C.
        if (isset($microservices) && $microservices->count()) {
            $rules[] = [
                'microservice_id' => $microservices[0]->id, // Microservice A
                'key' => 'campaign',
                'value' => '{"name": "Campaign B"}',
                'restrict' => 'N'
            ];
            $rules[] = [
                'microservice_id' => $microservices[1]->id, // Microservice B
                'key' => "query_type",
                'value' => '{"title": "SALE MADE"}',
                'restrict' => 'Y'
            ];

            MicroserviceRules::insert($rules);

        }
    }

}
