<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre',60)->unique();
            $table->decimal('precio',8,2);
            $table->integer('cantidad')->default(0);
            $table->string('foto',100);
            $table->unsignedInteger('id_categoria');
            $table->foreign('id_categoria','fk_categoria_producto')->references('id')->on('categoria');
            $table->timestamps();
             $table->charset = "utf8mb4";
            $table->collation = "utf8mb4_spanish_ci";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
