<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

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
        //admin user (stores id after inserting data)
        $user = DB::table('users')->insertGetId([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => '2025-02-10 20:00:01',
            'user_status' => 'Admin',
        ]);

        //have the users be created with their associated details tables too
        $p = DB::table('personal_details')->insertGetId([
        ]);

        DB::table('user_details')->insert([
            'users_id' => $user,
            'personal_details_info' => $p,
        ]);

        //normal users
        $user = DB::table('users')->insertGetId([
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => '2025-03-22 16:14:05',
            'user_status' => 'Normal',
        ]);

        $p = DB::table('personal_details')->insertGetId([
        ]);

        DB::table('user_details')->insert([
            'users_id' => $user,
            'personal_details_info' => $p,
        ]);

        $user = DB::table('users')->insertGetId([
            'email' => 'bob@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => '2025-03-20 13:10:12',
            'user_status' => 'Normal',
        ]);

        $p = DB::table('personal_details')->insertGetId([
        ]);

        DB::table('user_details')->insert([
            'users_id' => $user,
            'personal_details_info' => $p,
        ]);


        //products
        DB::table('items_for_sale')->insert([
            'item_price' => 19.99,
            'item_name' => 'Red Dead Redemption',
            'item_stock' => 5,
            'item_image' => '71W0shS7ylL._AC_SL1000',
            'item_description' => 'Third-person action-adventure game',
            'category' => 'ps3',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 10,
            'item_name' => 'Fallout 4',
            'item_stock' => 7,
            'item_image' => '812nlgWkM6L.AC_SL1500',
            'item_description' => 'Single-player action RPG game',
            'category' => 'xbox one',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 30,
            'item_name' => 'The Legend of Zelda: Tears of the Kingdom',
            'item_stock' => 11,
            'item_image' => '81eHh0BNU0L._AC_SL1500',
            'item_description' => 'Open-world action-adventure game',
            'category' => 'switch',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 20,
            'item_name' => 'Super Mario 3D All Stars',
            'item_stock' => 8,
            'item_image' => '81Xi9uVRf4L.AC_SL1500',
            'item_description' => 'Compilation game including Super Mario 64, Super Mario Sunshine and Super Mario Galaxy',
            'category' => 'switch',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 15,
            'item_name' => 'GTA V',
            'item_stock' => 15,
            'item_image' => '91Y4xD7QGNL.AC_SL1500',
            'item_description' => 'Action-adventure game',
            'category' => 'xbox 360',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 5.99,
            'item_name' => 'FIFA 21',
            'item_stock' => 0,
            'item_image' => '91KwPLW4BqL._AC_SL1500_',
            'item_description' => 'Football game',
            'category' => 'ps4',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 30,
            'item_name' => 'Animal Crossing: New Horizons',
            'item_stock' => 16,
            'item_image' => '81s8etnYPrL._AC_SL1500_',
            'item_description' => 'Social simulation game',
            'category' => 'switch',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 30,
            'item_name' => 'Hades',
            'item_stock' => 9,
            'item_image' => '81TzcunnxZL._AC_SL1500_',
            'item_description' => 'Rouguelike action RPG game',
            'category' => 'ps4',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 17,
            'item_name' => 'Nintendo Wii Remote',
            'item_stock' => 3,
            'item_image' => '613MCdoJsKL._AC_SX679_',
            'item_description' => 'Remote controller',
            'category' => 'wii console',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 18,
            'item_name' => 'Ceozon Ps3 Controller',
            'item_stock' => 12,
            'item_image' => '61s0qrNZJ9L._AC_SX385_',
            'item_description' =>'Dual Vibration',
            'category' => 'ps3 console',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 20,
            'item_name' => 'Generic Ps4 Controller',
            'item_stock' => 5,
            'item_image' => '71AELNYsd1L._AC_SX466_',
            'item_description' => 'Gamepad Joystick',
            'category' => 'ps4 console',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 90,
            'item_name' => 'Xbox 360 Elite Console',
            'item_stock' => 10,
            'item_image' => '61IlbDSM31L._AC_SY500_',
            'item_description' => '120GB Hard Drive',
            'category' => 'xbox 360 console',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 213,
            'item_name' => 'Sony PlayStation 4 Console',
            'item_stock' => 13,
            'item_image' => '61nxfegwhDL.__AC_SX300_SY300_QL70_ML2_',
            'item_description' => '1TB Black (Renewed)',
            'category' => 'ps4 console',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 160,
            'item_name' => 'Microsoft Xbox One S',
            'item_stock' => 12,
            'item_image' => '61KtYZcXXML.__AC_SY300_SX300_QL70_ML2_',
            'item_description' => '500GB (renewed)',
            'category' => 'xbox one console',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 250,
            'item_name' => 'Nintendo Switch (OLED Model)',
            'item_stock' => 3,
            'item_image' => '71m0aFDqciL._AC_SX522_',
            'item_description' => '64GB white model',
            'category' => 'switch console',
        ]);

    }
}
