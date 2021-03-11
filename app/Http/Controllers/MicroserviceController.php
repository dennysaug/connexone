<?php

namespace App\Http\Controllers;

use App\Microservice;
use Illuminate\Http\Request;

class MicroserviceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $data = $request->all();
        $microservice = Microservice::inRandomOrder()->first();
        $old_microservice = $microservice->name;
        $while = true;
        while($while) {
            if (isset($microservice)) {
                if (isset($microservice->rules)) {
                    foreach ($microservice->rules as $rule) {
                        if (array_key_exists($rule['key'], $data)) {
                            $value = json_decode($rule['value'], true);

                            $key = array_keys($value)[0];
                            $value = $value[$key];

                            if (isset($data[$rule['key']][$key]) && ($data[$rule['key']][$key] == $value) || ($microservice->id == 2 && $value == 'SALE MADE' && $rule['restrict'] == 'Y')) {
                                $microservice = Microservice::where('microservices.id', '<>', $microservice->id)->inRandomOrder()->first();
                            } else {
                                $while = false;
                            }

                        }
                    }
                }

                return [
                    'name' => $microservice->name,
                    'url' => $microservice->url
                ];
            }
        }

        abort(404);


    }
}
