<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('user_role')->nullable();
            $table->string('user_code')->nullable();
            $table->string('user_gender')->nullable();
            $table->date('user_birthdate')->nullable();
            $table->string('user_first_name')->nullable();
            $table->string('user_last_name')->nullable();
			$table->unsignedBigInteger('user_dep_id')->nullable();
            $table->string('user_mobile')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });

		Schema::table('users', function (Blueprint $table) {
			$table->foreign('user_dep_id')->references('dep_id')->on('departments');
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
};
