<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table->foreignId('user_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('city_id')
                ->constrained()
                ->onUpdate('cascade')
                ->nullOnDelete();
            $table->string('title');
            $table->enum('status', array('pending', 'published'));
            $table->string('excerpt');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->enum('time_unity', array('heure', 'demi-journée', 'jour', 'semaine', 'mois', 'année'));
            $table->string('picture_1')->nullable();
            $table->string('picture_2')->nullable();
            $table->string('picture_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
