<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tutores')) {
            Schema::create('tutores', function (Blueprint $table) {
                $table->id();
                $table->string('nombre_emp', 35);
                $table->string('tipo_doc', 35);
                $table->string('cif', 35);
                $table->string('nombre_tutor', 35);
                $table->string('apellido1', 35);
                $table->string('apellido2', 35);
                $table->string('pais', 35);
                $table->string('provincia', 35)->nullable();
                $table->string('municipio', 35)->nullable();
                $table->enum('estado', ['activo', 'inactivo']);
                $table->string('telefono', 35);
                $table->string('email', 35);
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutores');
    }
}
