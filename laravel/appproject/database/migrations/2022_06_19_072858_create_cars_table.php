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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('cate_id');
			$table->foreign('cate_id')->references('id')->on('categories');
			$table->unsignedBigInteger('client_id');
			$table->foreign('client_id')->references('id')->on('cleints');
			$table->string('title');
			$table->string('price');
			$table->string('booktype');
			$table->string('desc');
			$table->string('img');
			$table->enum('status', ['Block', 'Unblock'])->default('Unblock');
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
        Schema::dropIfExists('cars');
    }
};
