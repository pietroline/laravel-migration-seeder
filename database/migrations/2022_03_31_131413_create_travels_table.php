<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();

            $table->string("travel_name", 50);
            $table->string("resort_name", 30);
            $table->tinyInteger("resort_rating");
            $table->date("start_date");
            // $table->date("end_date"); //simulo colonna dimenticata
            $table->string("type", 30); //mezza pensione, tutto incluso
            $table->decimal("amount", 7, 2);
            $table->string("city", 30);
            $table->geometry("position");
            $table->tinyInteger("travel_rating");
            $table->boolean("passport");
            $table->boolean("travel_included");
            
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
        Schema::dropIfExists('travels');
    }
}
