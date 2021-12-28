<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spec_headers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('spec_id')
                ->references('id')
                ->on('specs')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('title', 50);
            $table->text('body')->nullable();

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
        Schema::dropIfExists('spec_headers');
    }
}
