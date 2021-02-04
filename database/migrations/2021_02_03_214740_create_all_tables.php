<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('razonSocial')->unique();
            $table->string('noRegistroAmbiental'); //Número de registro ambiental / SEMARNAT
            $table->timestamps();
        });

        Schema::create('sucursales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->string('nombre')->unique();
            $table->string('calle');
            $table->string('noExterior')->nullable(); //Número exterior
            $table->string('noInterior')->nulleable(); //Número interior
            $table->string('colonia');
            $table->integer('codigoPostal');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->string('telefono');
            $table->string('correoElectronico');
            $table->timestamps();
        });

        Schema::create('residuos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->boolean('corrosivo'); //TRUE=si es, FALSE=no es
            $table->boolean('reactivo'); //TRUE=si es, FALSE=no es
            $table->boolean('explosivo'); //TRUE=si es, FALSE=no es
            $table->boolean('toxico'); //TRUE=si es, FALSE=no es
            $table->boolean('inflamable'); //TRUE=si es, FALSE=no es
            $table->boolean('biologico'); //TRUE=si es, FALSE=no es (BIOLÓGICO/INFECCIOSO)
            $table->boolean('mezcla'); //TRUE=si es, FALSE=no es 
            $table->timestamps();
        });

        Schema::create('transportistas', function (Blueprint $table) {
            $table->id();
            $table->string('razonSocial')->unique();
            $table->string('noRegistroAmbiental'); //Número de registro ambiental / SEMARNAT
            $table->string('calle');
            $table->string('noExterior')->nullable(); //Número exterior
            $table->string('noInterior')->nulleable(); //Número interior
            $table->string('colonia');
            $table->integer('codigoPostal');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->string('telefono');
            $table->string('correoElectronico');
            $table->timestamps();
        });

        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transportista_id');
            $table->foreign('transportista_id')->references('id')->on('transportistas');
            $table->string('noPermisoSCT'); //Número de permiso de la Secretaría de Comunicaciones y Transportes (SCT)
            $table->string('tipo');
            $table->string('capacidad');
            $table->string('noPlaca'); //Número de placa
            $table->timestamps();
        });

        Schema::create('plantas', function (Blueprint $table) { //Plantas de tratamiento / Destinatarios
            $table->id();
            $table->string('razonSocial')->unique();
            $table->string('noRegistroAmbiental'); //Número de registro ambiental / SEMARNAT
            $table->string('calle');
            $table->string('noExterior')->nullable(); //Número exterior
            $table->string('noInterior')->nulleable(); //Número interior
            $table->string('colonia');
            $table->integer('codigoPostal');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->string('telefono');
            $table->string('correoElectronico');
            $table->timestamps();
        });

        Schema::create('estaciones', function (Blueprint $table) { //Estaciones de servicio
            $table->id();
            $table->string('razonSocial')->unique();
            $table->string('noEstacion'); //Número de estación
            $table->string('calle');
            $table->string('noExterior')->nullable(); //Número exterior
            $table->string('noInterior')->nulleable(); //Número interior
            $table->string('colonia');
            $table->integer('codigoPostal');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->string('telefono'); //PREGUNTAR
            $table->string('correoElectronico'); //PREGUNTAR
            $table->timestamps();
        });

        Schema::create('formatos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
        });

        Schema::create('estadoServicios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
        });

        Schema::create('manifiestos', function (Blueprint $table) { //Manifiestos de entrega, transporte y recepción de residuos peligrosos
            $table->id();
            $table->unsignedBigInteger('formato_id');
            $table->foreign('formato_id')->references('id')->on('formatos');
            $table->unsignedBigInteger('estadoServicio_id');
            $table->foreign('estadoServicio_id')->references('id')->on('estadoServicios');
            $table->timestamps();
            $table->integer('consecutivoMes');
            $table->string('noManifiesto');
            $table->integer('noPaginas'); //Número de páginas
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->unsignedBigInteger('sucursal_id');
            $table->foreign('sucursal_id')->references('id')->on('sucursales');
            $table->string('instrucciones')->nullable(); //Instrucciones especiales
            $table->unsignedBigInteger('transportista_id');
            $table->foreign('transportista_id')->references('id')->on('transportistas');
            $table->unsignedBigInteger('vehiculo_id');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');
            $table->unsignedBigInteger('planta_id');
            $table->foreign('planta_id')->references('id')->on('plantas');
            $table->unsignedBigInteger('estado_id')->nullable();
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->unsignedBigInteger('municipio_id')->nullable();
            $table->foreign('municipio_id')->references('id')->on('municipios');
        });

        Schema::create('manifiestos_residuos', function (Blueprint $table) {
            $table->unsignedBigInteger('manifiesto_id');
            $table->foreign('manifiesto_id')->references('id')->on('manifiestos');
            $table->unsignedBigInteger('residuo_id');
            $table->foreign('residuo_id')->references('id')->on('residuos');
        });

        Schema::create('embarques', function (Blueprint $table) { //Embarque de entrega, transporte y recepción de residuos de manejo especial
            $table->id();
            $table->unsignedBigInteger('formato_id');
            $table->foreign('formato_id')->references('id')->on('formatos');
            $table->unsignedBigInteger('estadoServicio_id');
            $table->foreign('estadoServicio_id')->references('id')->on('estadoServicios');
            $table->timestamps();
            $table->integer('consecutivoMes');
            $table->string('noEmbarque');
            $table->integer('noPaginas'); //Número de páginas
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->unsignedBigInteger('sucursal_id');
            $table->foreign('sucursal_id')->references('id')->on('sucursales');
            $table->string('instrucciones')->nullable(); //Instrucciones especiales
            $table->unsignedBigInteger('transportista_id');
            $table->foreign('transportista_id')->references('id')->on('transportistas');
            $table->unsignedBigInteger('vehiculo_id');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');
            $table->unsignedBigInteger('planta_id');
            $table->foreign('planta_id')->references('id')->on('plantas');
            $table->unsignedBigInteger('estado_id')->nullable();
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->unsignedBigInteger('municipio_id')->nullable();
            $table->foreign('municipio_id')->references('id')->on('municipios');
        });

        Schema::create('embarques_residuos', function (Blueprint $table) {
            $table->unsignedBigInteger('embarque_id');
            $table->foreign('embarque_id')->references('id')->on('embarques');
            $table->unsignedBigInteger('residuo_id');
            $table->foreign('residuo_id')->references('id')->on('residuos');
        });

        Schema::create('certificados', function (Blueprint $table) { //Certificados de Limpieza ecológica
            $table->id();
            $table->unsignedBigInteger('formato_id');
            $table->foreign('formato_id')->references('id')->on('formatos');
            $table->unsignedBigInteger('estadoServicio_id');
            $table->foreign('estadoServicio_id')->references('id')->on('estadoServicios');
            $table->timestamps();
            $table->integer('consecutivoAño');
            $table->string('noCertificado');
            $table->unsignedBigInteger('estacion_id');
            $table->foreign('estacion_id')->references('id')->on('estaciones');
            $table->unsignedBigInteger('manifiesto_id');
            $table->foreign('manifiesto_id')->references('id')->on('manifiestos');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('clientes');
        Schema::dropIfExists('sucursales');
        Schema::dropIfExists('residuos');
        Schema::dropIfExists('transportistas');
        Schema::dropIfExists('vehiculos');
        Schema::dropIfExists('plantas');
        Schema::dropIfExists('estaciones');
        Schema::dropIfExists('formatos');
        Schema::dropIfExists('estadoServicios');
        Schema::dropIfExists('manifiestos');
        Schema::dropIfExists('manifiestos_residuos');
        Schema::dropIfExists('embarques');
        Schema::dropIfExists('embarques_residuos');
        Schema::dropIfExists('certificados');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}