<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name',100);
            $table->date('birthdate');
            $table->enum('civilstatus',['single','married','widow','widower']);
            $table->enum('gender',['male','female']);
            $table->integer('mobile');
            $table->integer('home');                        
            $table->char('email');
            $table->char('address',100);
            $table->char('religion');
            $table->char('valid_id',20);
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
        Schema::drop('patients');
    }
}
