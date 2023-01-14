<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Televizor Samsung',
            'description' => '138 cm, Smart, 4K Ultra HD, clasa G',
            'price' => '400.00',
            'image' => 'image-3.jpg',
            'category' => 'televizoare'
        ]);
        DB::table('products')->insert([
            'name' => 'Frigider Heinner',
            'description' => 'H 144 cm, Argintiu, Clasa F, 213 l',
            'price' => '500.00',
            'image' => 'image-4.jpg',
            'category' => 'frigidere'
        ]);
        DB::table('products')->insert([
            'name' => 'Logitech G502 Hero',
            'description' => 'Mouse gaming 25K DPI, Negru',
            'price' => '60.00',
            'image' => 'image-5.jpg',
            'category' => 'periferice'
        ]);
        DB::table('products')->insert([
            'name' => 'Boxa JBL',
            'description' => 'Boxa portabila, IPX67, Bluetooth, Negru',
            'price' => '29.59',
            'image' => 'image-6.jpg',
            'category' => 'portabile audio'
        ]);
        DB::table('products')->insert([
            'name' => 'Telefon Xiaomi 11T',
            'description' => '8GB RAM, 256GB, 5G, Meteorite Gray',
            'price' => '427.33',
            'image' => 'image-7.jpg',
            'category' => 'telefoane'
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy S22',
            'description' => 'Dual SIM, 128GB, 8GB RAM, 5G, White',
            'price' => '615.74',
            'image' => 'image-8.jpg',
            'category' => 'telefoane'
        ]);
        DB::table('products')->insert([
            'name' => 'Televizor LED Nei',
            'description' => '100cm, Smart, 4K Ultra HD, Clasa G',
            'price' => '200.00',
            'image' => 'image-9.jpg',
            'category' => 'televizoare'
        ]);
        DB::table('products')->insert([
            'name' => 'Frigider Beko',
            'description' => '442 l, Clasa E, H 177 cm, Inox ',
            'price' => '620.00',
            'image' => 'image-10.jpg',
            'category' => 'frigidere'
        ]);
    }
}
