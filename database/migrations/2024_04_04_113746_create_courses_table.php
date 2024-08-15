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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name')->nullable();
            $table->decimal('course_rate')->nullable();
            $table->string('course_duration')->nullable(); 
            $table->string('course_month_year')->nullable(); 
            $table->date('course_start_date')->nullable();
            $table->date('course_expiry_date')->nullable();
            $table->text('course_description')->nullable();
            $table->string('course_image')->nullable();
            $table->string('is_delete')->default(1)->comment('0 - Delete, 1 - No Delete')->nullable();
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
        Schema::dropIfExists('courses');
    }
};
