<?php

namespace Database\Seeders;

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
            [
                'name' => 'Poco mobile',
                'price' => '40000',
                'description' => 'ram 8gb rom 128gb',
                'category' => 'electronics',
                'gallery' => 'https://images.indianexpress.com/2021/02/Poco-M3-Review-1.jpg'
            ],
            [
                'name' => '1+ mobile',
                'price' => '70000',
                'description' => 'ram 12gb rom 512gb',
                'category' => 'electronics',
                'gallery' => 'https://i.gadgets360cdn.com/products/large/oneplus-nord-ce-2-5g-db-650x800-1645105292.jpg?downsize=*:180'
            ]           
        ]);
    }
}
