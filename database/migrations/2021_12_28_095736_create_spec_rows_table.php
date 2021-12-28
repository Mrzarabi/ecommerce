<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecRowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spec_rows', function (Blueprint $table) {
            $table->id();

            $table->foreignId('spec_id')
                ->references('id')
                ->on('specs')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreignId('spec_header_id')
                ->references('id')
                ->on('spec_headers')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('title', 50);
            $table->text('value')->nullable();
            $table->text('help')->nullable();

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
        Schema::dropIfExists('spec_rows');
    }
}
