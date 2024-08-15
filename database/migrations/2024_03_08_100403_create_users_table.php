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
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('country')->nullable();
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('otp')->nullable();
            $table->string('otp_date_time')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('password')->nullable();
            $table->string('course_start_date')->nullable();
            $table->string('course_end_date')->nullable();
            $table->string('term_and_condition')->nullable();
            $table->string('is_payment')->default(0)->comment('0 - no payment, 1 - payment done');
            $table->string('is_lock')->nullable()->comment('0 = lock, 1 = not lock');
            $table->string('is_role')->nullable()->comment('1 = admin, 2 = student');
            $table->string('is_delete')->default(1)->comment('1 is note delete 0 is delete');
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
