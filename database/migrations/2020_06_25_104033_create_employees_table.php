<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('prefix');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->string('altmobile')->nullable();
             $table->string('extnumber')->nullable();
             $table->string('uan')->nullable();
             $table->string('role');
             $table->string('report_manager');
             $table->string('department');
             $table->string('designation');
             $table->string('emp_group');
             $table->string('dob');
             $table->string('actual_dob')->nullable();
              $table->string('gender');
              $table->string('martial_status');
              $table->string('nationlity')->nullable();
              $table->string('blood_group')->nullable();
              $table->string('father_name');
              $table->string('mother_name');
              $table->text('address1'); 
              $table->text('address2')->nullable();   
              $table->string('city')->nullable();  
              $table->string('state')->nullable();  
              $table->string('country')->nullable();  
              $table->string('zip')->nullable();          
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
        Schema::dropIfExists('employees');
    }
}
