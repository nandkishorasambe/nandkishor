<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student__addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->string('s_street_number');
            $table->text('s_address_line1');
            $table->text('s_address_line2');
            $table->string('s_city');
            $table->string('s_district');
            $table->string('s_state');
            $table->integer('s_pin_code');
            $table->unsignedBigInteger('s_country_id');
            $table->foreign('s_country_id')->references('id')->on('countries');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student__addresses');
    }
};
