<?php

use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
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
                ['name' => 'BOTELLAS 700ml'],
                ['name' => 'BOTELLAS 100ml'],
                ['name' => 'LACTEOS'],
                ['name' => 'AGRO'],
            ]
        );
    }
}
