<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MicroserviceRules extends Model
{
    public function microservice()
    {
        return $this->belongsTo(Microservice::class);
    }
}
