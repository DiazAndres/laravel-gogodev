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
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('prefix');
            $table->unsignedInteger('phone_number');
            // * La realación de la tabla phones con la tabla users
            // * es de uno a uno, por lo que se agrega la llave foránea
            // * user_id en la tabla phones.
            // * La nomenclatura de la llave foránea es el nombre de la tabla
            // * en singular seguido de _id.
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
