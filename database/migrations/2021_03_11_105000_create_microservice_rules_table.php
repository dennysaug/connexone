<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMicroserviceRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('microservice_rules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('microservice_id');
            $table->string('key');
            $table->string('value');
            $table->enum('restrict', ['Y','N'])->default('N');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('microservice_rules');
    }
}
