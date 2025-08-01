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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('description', 255)->nullable();
            $table->date('deadline');
            $table->boolean('done')->default(false);
            $table->timestamps();

            /*
            $table->integer('example');
            // Entero positivo
            $table->unsignedInteger('example_unsigned');
            $table->bigInteger('example_big');
            $table->unsignedBigInteger('example_big_unsigned');

            $table->text('example_text');
            $table->float('example_float');
            $table->double('example_double');

            // Solo acepta los valores del array del enum
            $table->enum('example_enum', ['option1', 'option2', 'option3']);
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
