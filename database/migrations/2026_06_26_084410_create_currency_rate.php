<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('currency_rate', function (Blueprint $table) {
            $table->id();
            $table->foreignId('currency_id')->references('id')->on('currencies')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('rate', 14, 4);
            $table->date('date')->default(DB::raw('(CURRENT_DATE)'));
        });

        Schema::table('currency_rate', function (Blueprint $table) {
            $table->unique(['currency_id', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currency_rate');
    }
};
