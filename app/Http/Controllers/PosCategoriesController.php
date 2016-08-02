<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PosCategoriesController extends Controller
{
    public function FunctionName(Requests $request)
    {
        $this->validate($request, [
            'name' => 'required|string'
        ]);

        $pos_category = new PosCategory;
		$pos_category->name = $request->input('name');
		$pos_category->save();

		return response()->sucess(compact('pos_category'));
	}
}