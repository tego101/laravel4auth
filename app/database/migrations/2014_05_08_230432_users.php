<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::dropIfExists('users');
	    
		Schema::create('users', function($table)
		{
		    $table->increments('id');
		    $table->string('act_code')->default(null);
		    $table->integer('group')->default(100);
		    $table->integer('subid')->default(0);
		    $table->string('first_name')->default(null);
		    $table->string('company_name')->default(null);
		    $table->string('phone_number')->default(null);
		    $table->string('email')->null(false);
		    $table->string('password')->null(false);
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
		//
		Schema::dropIfExists('users');
	}

}
