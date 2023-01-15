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
        Schema::create('school', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_registrant');
            $table->string('name', 100);
            $table->string('cnpj', 14);
            $table->string('city', 50);
            $table->string('uf', 2);
            $table->enum('type', ['public', 'private']);
            $table->string('email', 100);
            $table->string('phone', 11);
            $table->timestamps();
        });

        Schema::table('school', function (Blueprint $table){
            $table->foreign('id_registrant')->references('id')->on('registrant')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school');
    }
};
