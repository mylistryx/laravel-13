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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->char('alfa', 3)->unique();
            $table->char('number', 3)->unique();
            $table->string('name');
            $table->char('symbol', 1);
            $table->boolean('is_active')->default(true);
        });

        DB::table('currencies')->insert([
            [
                'alfa'   => 'USD',
                'name'   => 'Доллар США',
                'number' => '840',
                'symbol' => '$',
            ],
            [
                'alfa'   => 'EUR',
                'name'   => 'Евро',
                'number' => '978',
                'symbol' => '€',
            ],
            [
                'alfa'   => 'RUB',
                'name'   => 'Российский рубль',
                'number' => '643',
                'symbol' => '₽',
            ],
            [
                'alfa'   => 'CNY',
                'name'   => 'Китайский юань',
                'number' => '156',
                'symbol' => '¥',
            ],
            [
                'alfa'   => 'JPY',
                'name'   => 'Японская йена',
                'number' => '392',
                'symbol' => '¥',
            ],
        ]);

        Schema::create('currency_rates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('currency_id')
                  ->references('id')
                  ->on('currencies')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->decimal('rate', 14, 4);
            $table->date('date')
                  ->default(DB::raw('(CURRENT_DATE)'));
        });

        Schema::table('currency_rates', function (Blueprint $table) {
            $table->unique(['currency_id', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currency_rates');
        Schema::dropIfExists('currencies');
    }
};
