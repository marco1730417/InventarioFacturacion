<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable();
            $table->string('codigo')->require()->unique();;
            $table->string('descripcion');
            $table->double('unidades',8,2);
            $table->integer('iva');
            $table->double('PrecioVenta1',8,2);
            $table->double('PrecioVenta2',8,2)->nullable();
            $table->double('PrecioVenta3',8,2)->nullable();
            $table->double('PrecioInventario',8,2)->nullable();
            $table->double('Utilidad',8,2)->nullable();
            $table->double('Margen',8,2)->nullable();
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
        Schema::dropIfExists('productos');
    }
}
