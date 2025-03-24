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
            'item_price' => 20,
            'item_name' => 'Gran Turismo 5',
            'item_stock' => 3,
            'item_image' => '81FpKc+qBCS._AC_SX342_SY445_',
            'item_description' => 'Driving Simulator',
            'category' => 'ps3',
        ]);


        DB::table('items_for_sale')->insert([
            'item_price' => 18,
            'item_name' => 'Sonic and Sega All-Stars Racing',
            'item_stock' => 12,
            'item_image' => '51go-oGQpkL.__AC_SX300_SY300_QL70_ML2_',
            'item_description' => '27 challengig tracks',
            'category' => 'ps3',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 55,
            'item_name' => 'WWE 2K25 Standard Edition',
            'item_stock' => 30,
            'item_image' => '81Ot0q18vmL.__AC_SX300_SY300_QL70_ML2_',
            'item_description' => '2K SHOWCASE: THE BLOODLINES DYNASTY',
            'category' => 'ps4',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 44,
            'item_name' => 'Star Wars Jedi: Survivor',
            'item_stock' => 18,
            'item_image' => '71zLiJUoNwL.__AC_SX300_SY300_QL70_ML2_',
            'item_description' => 'The cinematic combat system returns with additional Force abilities and new lightsaber fighting styles',
            'category' => 'ps4',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 19,
            'item_name' => 'Hogwarts Legacy',
            'item_stock' => 6,
            'item_image' => '71rIbO8tcOL._AC_SX385_.',
            'item_description' => 'open-world action RPG',
            'category' => 'ps4',
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
            'item_price' => 14,
            'item_name' => 'LEGO Marvel Avngers',
            'item_stock' => 3,
            'item_image' => '71+3KHxaRlL._AC_SX342_SY445_',
            'item_description' => 'Join the LEGO Marvel’s Avengers team',
            'category' => 'xbox one',
        ]);


        DB::table('items_for_sale')->insert([
            'item_price' => 17,
            'item_name' => 'SEGA Mega Drive Classics',
            'item_stock' => 8,
            'item_image' => '81eyzIVnxbL._AC_SX385_',
            'item_description' => 'Over 50 retro favourites in one great package',
            'category' => 'xbox one',
        ]);


        DB::table('items_for_sale')->insert([
            'item_price' => 10,
            'item_name' => 'Minecraft',
            'item_stock' => 12,
            'item_image' => '71TQeUM4A8L.__AC_SX300_SY300_QL70_ML2_',
            'item_description' => ' a completely new way to build Minecraft worlds where your imagination is the only limit.',
            'category' => 'xbox 360',
        ]);


        DB::table('items_for_sale')->insert([
            'item_price' => 14,
            'item_name' => 'Batman Arkham City',
            'item_stock' => 9,
            'item_image' => '71AevfyuhgL._AC_SY500_',
            'item_description' => 'Protect Arham City',
            'category' => 'xbox 360',
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
            'item_price' => 23,
            'item_name' => 'Sonic Mania Plus',
            'item_stock' => 3,
            'item_image' => '81x9StmI4UL.__AC_SX300_SY300_QL70_ML2_.',
            'item_description' => ' true, classic Sonic experience',
            'category' => 'switch',
        ]);


        DB::table('items_for_sale')->insert([
            'item_price' => 37,
            'item_name' => 'Mario Kart 8 Deluxe',
            'item_stock' => 7,
            'item_image' => '91vd7WQ1acL.__AC_SX300_SY300_QL70_ML2_',
            'item_description' => 'The Mario Kart you know and love, with many new features',
            'category' => 'switch',
        ]);


        DB::table('items_for_sale')->insert([
            'item_price' => 40,
            'item_name' => 'Dog Man: Mission Impawsible',
            'item_stock' => 20,
            'item_image' => '81l+j4TR7ML._AC_SY445_SX342_',
            'item_description' => '50 Exciting Levels: Explore iconic locations from the Dog Man universe',
            'category' => 'switch',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 30,
            'item_name' => 'GhostRunner',
            'item_stock' => 5,
            'item_image' => '71C8L7bF1EL._AC_SY500_',
            'item_description' => 'first-person action slasher game with Slick parkour-inspired gameplay elements',
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
            'item_price' => 50,
            'item_name' => 'AUFGLO Wii Controller 4 Pack',
            'item_stock' => 4,
            'item_image' => '610UIAAPQXL._AC_SX522_',
            'item_description' => 'Wii Remote with Silicone Case and Wrist Strap(Black - White - Red - Blue)',
            'category' => 'wii console',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 62,
            'item_name' => 'Nintendo Wii Console',
            'item_stock' => 8,
            'item_image' => '514LpNgQeLL._AC_SX466_',
            'item_description' => '',
            'category' => 'wii console',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 9,
            'item_name' => 'Official Wii Wheel',
            'item_stock' => 8,
            'item_image' => '410ie3vEh-L._AC_',
            'item_description' => '410ie3vEh-L._AC_',
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
            'item_price' => 110,
            'item_name' => 'Sony Computer Slim Console',
            'item_stock' => 3,
            'item_image' => '21jtUCKSGlL.__AC_QL70_ML2_',
            'item_description' => '120 GB',
            'category' => 'ps3 console',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 110,
            'item_name' => 'Sony Super Slim Console',
            'item_stock' => 2,
            'item_image' => '61QrEUcb--L.__AC_SX300_SY300_QL70_ML2_',
            'item_description' => '12GB',
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
            'item_price' => 140,
            'item_name' => 'Sony Ps4 Console ',
            'item_stock' => 12,
            'item_image' => '61ryVJLDlFL._AC_SX679_',
            'item_description' => 'redefines rich and immersive gameplay ',
            'category' => 'ps4 console',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 185,
            'item_name' => 'Sony PS4 Pro Console',
            'item_stock' => 3,
            'item_image' => '71GWJXGeZsL._AC_SX679_',
            'item_description' => 'Black 1TB',
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
            'item_price' => 90,
            'item_name' => 'Xbox 360 Arcade Console',
            'item_stock' => 2,
            'item_image' => '613OJ8O1AZL.__AC_SX300_SY300_QL70_ML2_',
            'item_description' => 'Everything that players need to get their game on ',
            'category' => 'xbox 360 console',
        ]);
        DB::table('items_for_sale')->insert([
            'item_price' => 250,
            'item_name' => 'Microsoft Xbox 360 E Console',
            'item_stock' => 10,
            'item_image' => '61B6ZAdZDxL.__AC_SX300_SY300_QL70_ML2_',
            'item_description' => '',
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
            'item_name' => 'Microsoft Xbox One S Console',
            'item_stock' => 12,
            'item_image' => '61KtYZcXXML.__AC_SY300_SX300_QL70_ML2_',
            'item_description' => '500GB (renewed)',
            'category' => 'xbox one console',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 250,
            'item_name' => 'Nintendo Switch (OLED Model) Console',
            'item_stock' => 3,
            'item_image' => '71m0aFDqciL._AC_SX522_',
            'item_description' => '64GB white model',
            'category' => 'switch console',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 243,
            'item_name' => 'Nintendo Switch (Neon Red/Neon blue)',
            'item_stock' => 5,
            'item_image' => '71KC3J22BEL._AC_SX679_',
            'item_description' => 'Nintendo Switch can bring the fun anywhere you go, with anyone!',
            'category' => 'switch console',
        ]);

        DB::table('items_for_sale')->insert([
            'item_price' => 18,
            'item_name' => 'Orzly Steering Wheels for Nintendo Switch ',
            'item_stock' => 10,
            'item_image' => '71uhFtFyWgL._AC_SX466_',
            'item_description' => 'OLED Joy-Cons, Racing Wheels for Mario Kart 8 Deluxe',
            'category' => 'switch console',
        ]);

    }
}
