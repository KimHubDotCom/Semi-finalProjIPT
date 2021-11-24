<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investors', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('address',100);
            $table->bigInteger('phone');
            $table->string('investment',100);
            $table->timestamps();
        });
    }
    //Investors [id, name, address, phone, investment]


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investors');
    }
}
