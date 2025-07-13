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

        // Por defecto viene vacío, por lo que para modificar una tabla existente, se debe de apuntar a la tabla
        // y después hacer las acciones que se desean, por ejemplo si se desea agregar una columna se hace forma normal
        // pero si se desea eliminar una columna, se debe de hacer con el método dropColumn
        // Schema::table('notes', function (Blueprint $table) {
        //     $table->string('author');
        //     $table->dropColumn(['deadline']);
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // En el down se ponen las acciones que se desean hacer en caso de que se haga un rollback
        // En este caso se eliminó la columna author y se agregó la columna deadline
        // Schema::dropColumns(['author']);
        // Schema::table('notes', function (Blueprint $table) {
        //     $table->date('deadline');
        // });
    }
};
