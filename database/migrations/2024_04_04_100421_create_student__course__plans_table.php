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
        Schema::create('student_course_plans', function (Blueprint $table) {
            $table->id();
            $table->string('course_plan_type')->nullable()->default(1)->comment('1 - Basic, 2  - Medium, 3 - Pro');
            $table->string('course_plan_amount')->nullable();
            $table->string('course_plan_description')->nullable();
            $table->string('course_plan_total')->nullable();
            $table->string('course_plan_start_date')->nullable();
            $table->string('course_plan_expiry_date')->nullable();
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
        Schema::dropIfExists('student_course_plans');
    }
};
