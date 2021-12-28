<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->uuid('id')->primary();

            $table->string('name', 50);
            $table->string('family', 50);
            $table->string('avatar')->nullable();
            $table->unsignedInteger('age')->nullable();
            $table->string('number')->nullable();
            $table->string('n_code')->nullable();
            $table->string('city', 50)->nullable();
            $table->string('address', 120)->nullable();
            $table->string('post_code')->nullable();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            
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
