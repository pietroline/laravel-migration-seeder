<?php

use App\Travel;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){

            $travel = new Travel();

            $travel->travel_id = $faker->isbn10;
            $travel->resort_name = $faker->firstName . "'s Hotel";
            $travel->resort_rating = $faker->randomFloat($nbMaxDecimals = 1, $min = 1, $max = 5);
            $travel->start_date = $faker->dateTimeBetween($startDate = '-30 days', $endDate = "now", $timezone = null);
            $travel->end_date = $faker->dateTimeBetween($startDate = '-30 days', $endDate = $travel->start_date, $timezone = null);

            $random_number= rand(0,1);
            if($random_number==1){
                $travel->type = "all inclusive";
            }else{
                $travel->type = "mezza pensione";
            }

            $travel->amount =  $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 10000);
            $travel->city = $faker->city;
            $travel->travel_rating = $faker->numberBetween($min = 1, $max = 10);
            $travel->passport = $faker->boolean;
            $travel->travel_included = $faker->boolean;
    
            $travel->save();

        }
    }
}
