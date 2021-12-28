<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedInteger('number');
            $table->unsignedInteger('unit')->nullable();
            $table->unsignedInteger('off')->nullable();
            $table->time('off_start')->nullable();
            $table->time('off_end')->nullable();

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
        Schema::dropIfExists('variations');
    }
}
