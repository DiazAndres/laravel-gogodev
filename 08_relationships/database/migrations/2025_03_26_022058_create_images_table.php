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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            // * Polymorphic relationship
            // * imageable_type: the name of the model that the image belongs to
            // * imageable_id: the id of the model that the image belongs to
            $table->unsignedBigInteger('imageable_id');
            $table->string('imageable_type');
            // * Aqui se crea el imageable_id y imageable_type
            // * para que se pueda hacer la relación polimórfica
            // * imageable_id: el id de la tabla a la que se va a relacionar
            // * imageable_type: el nombre de la tabla a la que se va a relacionar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
