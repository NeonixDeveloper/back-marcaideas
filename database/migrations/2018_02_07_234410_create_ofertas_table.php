<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lugar_id')->unsigned();
            $table->string('producto');
            $table->text('descripcion');
            $table->string('cupon',20);
            $table->double('precio_regular');
            $table->double('precio_promocion');
            $table->double('descuento');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->text('image_url');
            $table->text('condiciones');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
}
