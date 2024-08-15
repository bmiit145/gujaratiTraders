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
        Schema::create('cupan_codes', function (Blueprint $table) {
            $table->id();
            $table->string('cupan_code')->nullable();
            $table->string('is_expire')->default('0')->comment('0 is not_expire 1 is expire');
            $table->string('is_share')->default('0')->comment('0 is note share 1 is share');
            $table->string('discount_amount')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
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
        Schema::dropIfExists('cupan_codes');
    }
};
