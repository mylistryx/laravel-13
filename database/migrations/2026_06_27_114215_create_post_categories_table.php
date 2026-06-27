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
        Schema::create('post_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')
                  ->nullable()
                  ->constrained('post_categories')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->string('name');
            $table->text('description')
                  ->nullable();
            $table->integer('position')
                  ->nullable()
                  ->default(null);
            $table->boolean('is_active')
                  ->default(false);
            $table->datetimes();
        });

        DB::table('post_categories')->insert([
            [
                'id'          => 1,
                'parent_id'   => null,
                'name'        => 'Новости разработки',
                'description' => 'Базовая категория новостей',
                'is_active'   => true,
            ],
            [
                'id'          => 2,
                'parent_id'   => 1,
                'name'        => 'Redis',
                'description' => 'Подмножество новостей исключительно по Redis',
                'is_active'   => true,
            ],
            [
                'id'          => 3,
                'parent_id'   => 1,
                'name'        => 'PHP',
                'description' => 'Подмножество новостей исключительно по PHP',
                'is_active'   => true,
            ],
            [
                'id'          => 4,
                'parent_id'   => 1,
                'name'        => 'MySQL',
                'description' => 'Подмножество новостей исключительно по MySQL',
                'is_active'   => true,
            ],
            [
                'id'          => 5,
                'parent_id'   => null,
                'name'        => 'События',
                'description' => 'Обзор событий',
                'is_active'   => true,
            ],
            [
                'id'          => 6,
                'parent_id'   => 5,
                'name'        => 'В мире',
                'description' => 'Мировые',
                'is_active'   => true,
            ],
            [
                'id'          => 7,
                'parent_id'   => 5,
                'name'        => 'В регионе',
                'description' => 'Региональные',
                'is_active'   => true,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_categories');
    }
};
