<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Messages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		
		    Schema::create('messages', function (Blueprint $table) {
            $table->increments('mes_id');
            $table->integer('mes_from');
            $table->integer('mes_to');
            $table->integer('mes_reply_to');
            //$table->string('mes_date');
            // $table->integer('mes_on');
            $table->string('mes_title');
            $table->text('mes_message');
            $table->integer('mes_read');
            $table->integer('mes_status');
            $table->rememberToken();
            $table->timestamps();
        });
		
		


        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		
		        Schema::drop('messages');

    }
}
