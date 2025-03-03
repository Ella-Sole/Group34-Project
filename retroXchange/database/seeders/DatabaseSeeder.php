<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);

        DB::table('items_for_sale')->insert([
            'item_price' => 10,
            'item_name' => 'Red Dead Redemption',
            'item_stock' => 5,
            'item_image' => '71W0shS7ylL._AC_SL1000',
            'item_description' => 'Action Survival',
            'category' => 'ps3',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 4,
            'item_name' => 'Fallout 4',
            'item_stock' => 7,
            'item_image' => '812nlgWkM6L.AC_SL1500',
            'item_description' => 'Action RPG',
            'category' => 'xbox one',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 13,
            'item_name' => 'Legend of Zelda Breath of the Wild',
            'item_stock' => 11,
            'item_image' => '81eHh0BNU0L._AC_SL1500',
            'item_description' => 'Action Adventure',
            'category' => 'switch',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 20,
            'item_name' => 'Super Mario 64',
            'item_stock' => 8,
            'item_image' => '81Xi9uVRf4L.AC_SL1500',
            'item_description' => 'Action Platformer',
            'category' => 'switch',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 15,
            'item_name' => 'GTA V',
            'item_stock' => 15,
            'item_image' => '91Y4xD7QGNL.AC_SL1500',
            'item_description' => 'Action Platformer',
            'category' => 'xbox 360',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 2,
            'item_name' => 'FIFA 21',
            'item_stock' => 3,
            'item_image' => '91KwPLW4BqL._AC_SL1500_',
            'item_description' => 'Football',
            'category' => 'ps4',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 30,
            'item_name' => 'Animal Crossing: New Horizons',
            'item_stock' => 16,
            'item_image' => '81s8etnYPrL._AC_SL1500_',
            'item_description' => 'Social Simulation',
            'category' => 'switch',
        ]);

    }
}
