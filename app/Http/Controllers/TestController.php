<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\PosCategory;
use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function get_category($id)
    {
        try {
            $this->create_data();
        } catch (\Exception $e) {
            echo('datos creados');
        }

        $result = PosCategory::find($id);
        if ($result == null) {
            echo('datos no encontrados');
        } else {
            dd($result);
        }
    }

    public function create_data()
    {
        $product_category = new ProductCategory();
        $product_category->name = 'BOTELLAS VINO';
        $product_category->save();

        $pos_category_vino = new PosCategory();
        $pos_category_vino->name = 'VINOS';
        $pos_category_vino->save();

        $pos_category_vino_tinto = new PosCategory();
        $pos_category_vino_tinto->name = 'TINTO';
        $pos_category_vino_tinto->parent_id = $pos_category_vino->id;
        $pos_category_vino_tinto->save();

        $pos_category_vino_blanco = new PosCategory();
        $pos_category_vino_blanco->name = 'BLANCO';
        $pos_category_vino_blanco->parent_id = $pos_category_vino->id;
        $pos_category_vino_blanco->save();

        $pos_category_vino_rodado = new PosCategory();
        $pos_category_vino_rodado->name = 'ROSADO';
        $pos_category_vino_rodado->parent_id = $pos_category_vino->id;
        $pos_category_vino_rodado->save();

        $product = new Product();
        $product->name = 'vino tinto A';
        $product->barcode = '100100100';
        $product->barcode_type = 'EAN';
        $product->price_cost = 1;
        $product->price_sell = 2.5;
        $product->product_category_id = $product_category->id;
        $product->pos_category_id = $pos_category_vino_tinto->id;
        $product->sell_on_tpv = true;
        $product->save();


    }
}
