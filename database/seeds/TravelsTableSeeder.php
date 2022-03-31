<?php

use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travel = new Travel();

        $travel->travel_id = "25dfs324df";
        $travel->resort_name = "Plumeria Hotel";
        $travel->resort_rating = 4.6;
        $travel->start_date = date("2022-05-05");
        $travel->end_date = date("2022-05-15");
        $travel->type = "all inclusive";
        $travel->amount = 1799.99;
        $travel->city = "Maldive";
        $travel->position = "6.894726 Nord 73.126832 Est";
        $travel->travel_rating = 8;
        $travel->passport = true;
        $travel->travel_included = true;

        $travel->save();
    }
}
