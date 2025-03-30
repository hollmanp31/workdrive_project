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
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id_registro');
            $table->string('nombres'); 
            $table->string('apellidos'); 
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedInteger('id_dp1'); 

            // Definir claves foraneas
            $table->foreign('id_dp1')->references('id_detalle_parametro')->on('detalle_parametros')->onDelete('cascade');
        }); 

        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->unsignedInteger('id_registro1'); 
            $table->string('usuario', 40);
            $table->string('password');
            $table->timestamps(); 

            // Definir claves foraneas
            $table->foreign('id_registro1')->references('id_registro')->on('registros')->onDelete('cascade');
        });

        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id_Empleado');
            $table->unsignedInteger('id_registro2');
            $table->unsignedInteger('id_labor');
            $table->unsignedInteger('id_sexo');
            $table->unsignedInteger('id_salario');
            $table->string('certificado');
            $table->string('curriculum');
            $table->unsignedInteger('id_dp2');
            $table->timestamps(); 

            // Definir clves foraneas 
            $table->foreign('id_registro2')->references('id_registro')->on('registros')->onDelete('cascade'); 
            $table->foreign('id_dp2')->references('id_detalle_parametro')->on('detalle_parametros')->onDelete('cascade');
        }); 

        Schema::create('disponibilidad', function (Blueprint $table) {
            $table->increments('id_disponibilidad');
            $table->unsignedInteger('id_empleado1'); 
            $table->date('fecha');
            $table->time('hora');
            $table->timestamps();

            // Definir claves foraneas
            $table->foreign('id_empleado1')->references('id_empleado')->on('empleados')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros'); 
        Schema::dropIfExists('usuarios'); 
        Schema::dropIfExists('empleados'); 
        Schema::dropIfExists('disponibilidad'); 
    }
};
