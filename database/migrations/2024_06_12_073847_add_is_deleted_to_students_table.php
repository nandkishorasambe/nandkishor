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
        Schema::table('students', function (Blueprint $table) {
            $table->boolean('is_deleted')->default(false);
            $table->boolean('is_active')->default(true);
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('deleted_by');
            $table->foreign('deleted_by')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes(); // This adds the deleted_at column

        });
    }

    /**1
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropcolumn('is_deleted');
            $table->dropcolumn('is_active');
            $table->dropcolumn('created_by');
            $table->dropcolumn('deleted_by');
            $table->dropColumn(['created_at', 'updated_at']);
            $table->dropcolumn('deleted_at');
            
        });
    }
};
