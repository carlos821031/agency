<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistances', function (Blueprint $table) {
            $table->id();
            $table->string('reftouroperator')->nullable(); //Referencia del touroperador
            $table->string('reference'); //Referencia nuestra
            $table->string('clients'); //Nombre de un cliente
            $table->string('agency'); //Agencia
            $table->string('service'); //Servicio
            $table->string('type')->nullable(); //Tipo de servicio
            $table->dateTime('arrival', $precision = 0); //Fecha y hora de comienzo del servicio
            $table->dateTime('sortie', $precision = 0); //fecha y hora de terminacion del servicio
            $table->text('observation'); //Observaciones
            $table->string('supplier'); //Proveedor
            $table->string('invoice')->nullable(); //Factura
            $table->integer('pax')->nullable(); //Cantidad de pax
            $table->string('state')->nullable(); //Estado de la asistencia            
            $table->integer('nights')->nullable(); //Cantidad de noches
            $table->string('attendee'); //Asistente o Polo Turistico
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->string('period'); //Mes.ano.state q pertenece. 10.2022.active(asistencia activa), 10.2022.archive(respaldo por si da error el importar, encuanto se importe bien debe ser eliminado.)
            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assistances');
    }
};
