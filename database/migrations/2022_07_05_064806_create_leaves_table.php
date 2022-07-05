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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id('leave_id');
			$table->date('leave_from');
			$table->date('leave_to');
			$table->unsignedBigInteger('leave_leave_type_id');
			$table->string('leave_reason')->nullable();
			$table->string('leave_status')->default('PENDING');
			$table->unsignedBigInteger('leave_user_id');
            $table->timestamps();
        });

		Schema::table('leaves', function (Blueprint $table) {
			$table->foreign('leave_leave_type_id')->references('leave_type_id')->on('leave_types');
			$table->foreign('leave_user_id')->references('id')->on('users');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaves');
    }
};
