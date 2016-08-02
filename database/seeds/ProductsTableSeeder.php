<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert(
            [
                [
                    'name' =>  'cerveza cristal',
                    'barcode' =>  '100100100',
                    'barcode_type' =>  'EAN',
                    'price_cost' =>  1,
                    'price_sell' =>  2.5,
                    'product_category_id' =>  1,
                    'tpv_category_id' =>  1,
                    'sell_on_tpv' =>  true,
                ],

            ]
        );
    }
}
