<?php

use Illuminate\Database\Seeder;
use App\Restaurant;
use Illuminate\Support\Str;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newRestaurant = new Restaurant();

        $newRestaurant->user_id = 1;

        $newRestaurant->name = 'Chin Pao';
        $newRestaurant->address = 'Via leditadalnaso';
        $newRestaurant->pIva = '12345678910';
        $newRestaurant->logo = 'www.bellogo.netttt';
        $newRestaurant->shipping = 19.90;
        
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');

        $newRestaurant->save();
        
    }
}
