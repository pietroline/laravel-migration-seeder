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

            $table->string("travel_id", 10);
            $table->string("resort_name", 30);
            $table->decimal("resort_rating", 3, 1); //punteggio da 1 a 5
            $table->string("start_date");
            // $table->date("end_date"); //simulo colonna dimenticata
            $table->string("type", 30); //mezza pensione, tutto incluso
            $table->decimal("amount", 7, 2);
            $table->string("city", 30);
            $table->tinyInteger("travel_rating"); //punteggio da 0 a 10 senza mezzi valori
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
