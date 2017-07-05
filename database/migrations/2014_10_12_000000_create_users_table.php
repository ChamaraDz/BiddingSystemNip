<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('primary_contact');
            $table->string('secondary_contact');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('address');
            $table->string('fax');
			/*
            $table->string('address2');
            $table->string('address3');
			*/
        $table->integer('user_type')->comment = "1=Super admin |  2= Admin | 3 = Web user";
            
        $table->integer('user_status')->comment="-1=Not Verified | 0=Deactive | 1=Active | 2=Adcive and Hidden.";
        $table->integer('web_user_type')->comment="1: Companies , 2: Other , 3: Normal User";
               $table->rememberToken();
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
        Schema::drop('users');
    }
}
