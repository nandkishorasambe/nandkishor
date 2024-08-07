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
        Schema::create('teacher_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->string('t_street_number');
            $table->text('t_address_line1');
            $table->text('t_address_line2');
            $table->string('t_city');
            $table->string('t_district');
            $table->string('t_state');
            $table->integer('t_pin_code');
            $table->unsignedBigInteger('t_country_id');
            $table->foreign('t_country_id')->references('id')->on('countries');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_addresses');
    }
};
