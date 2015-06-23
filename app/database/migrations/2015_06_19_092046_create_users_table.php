<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
		$table->increments('id');
        $table->string('fname', 50);
        $table->string('username', 50);
        $table->string('email', 50);
        $table->string('password', 50);
        $table->string('role', 50);
        $table->string('flat_no', 50);
        $table->string('wing', 50);
        $table->string('mobile', 50); 
        $table->integer('flat_area');
        $table->string('amt', 50);
        $table->string('created_by', 50);
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
	}

}
