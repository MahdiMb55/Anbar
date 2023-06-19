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
        Schema::create('darkhast_rows', function (Blueprint $table) {
            $table->id();
            $table->integer('count')->default(1);
            $table->string('kalaname');
            $table->string('description')->nullable();
            $table->unsignedBigInteger('darkhast_id');
            $table->foreign('darkhast_id')
            ->references('id')->on('darkhasts')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('darkhast_rows');
    }
};
