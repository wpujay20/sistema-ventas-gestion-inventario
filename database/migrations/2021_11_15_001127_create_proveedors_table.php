<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50)->unique();
            $table->string('ruc',15);
            $table->string('direccion')->nullable();
            $table->enum('estado',['Habilitado','Inhabilitado'])->default('Habilitado');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('proveedors');
    }
}
