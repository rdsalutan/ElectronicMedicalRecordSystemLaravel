<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
			$table->char('name',255);
			$table->date('birthdate');
			$table->enum('civilstatus',['single','married','widow','widower']);
			$table->integer('age');
			$table->enum('sex',['male','female']);
				//optional
					$table->char('course',100);
			$table->integer('schoolyear');
			$table->integer('cell_num');
			$table->char('email');
			$table->char('address',100);
			$table->integer('school_year');
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
        Schema::drop('students');
    }
}
