<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVitalSignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vital_signs', function (Blueprint $table) {
            $table->increments('id');
            $table->char('blood_pressure',8);
            $table->integer('respiratory_rate');
            $table->float('height');
            $table->float('temperature');
            $table->integer('cardiac_rate');
            $table->float('weight');            
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
        Schema::drop('vital_signs');
    }
}
