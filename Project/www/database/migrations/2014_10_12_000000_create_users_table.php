<?php

use Illuminate\Support\Facades\Schema;
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
            $table->text('address')->nullable();
            $table->string('tel_home')->nullable();
            $table->string('tel_mobile')->nullable();
            $table->string('house_no')->nullable();
            $table->string('village_no')->nullable();
            $table->string('lane')->nullable();
            $table->string('road')->nullable();
            $table->string('area')->nullable();
            $table->string('sub_area')->nullable();
            $table->string("province")->nullable();
            $table->string("postal_code")->nullable();
            $table->string('email')->unique();
            $table->integer('role_id')->index();
            $table->string('password');
            $table->text('card_id');
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
        Schema::dropIfExists('users');
    }
}
