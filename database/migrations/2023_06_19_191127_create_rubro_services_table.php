<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRubroServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubro_services', function (Blueprint $table) {
            $table->id();
            $table->integer('id_rubro')->default(0)->nullable();
            $table->string('rubro');
            $table->string('title');

            $table->string('text')->nullable()->default('');
            $table->string('photo')->nullable()->default('');
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
        Schema::dropIfExists('rubro_services');
    }
}
