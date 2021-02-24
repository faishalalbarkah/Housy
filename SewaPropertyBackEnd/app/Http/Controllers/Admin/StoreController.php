<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $rules = [
            'id_type_of_rent' => 'required',
            'kota' => 'required',
            'kecamatan' => "required",
            'bedroom' => 'required',
            'bathroom' => 'required',
            'spacious_room' => 'required',
            'name' => 'required',
            'price' => 'required',
            'address' => 'required',
            'description' => 'required',
            'id_amenities' => 'required',
        ];

        $product_image = [
            'image' => 'required',
        ];

        if ($request->hasFile('image')) {
            $rules = Arr::add($rules, 'image', 'required|mimes:jpeg,jpg,png,gif');
        }

        $this->validate($request, $rules, $product_image);

        $attributes = [
            'id_type_of_rent' => $request->id_type_of_rent,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'bedroom' => $request->bedroom,
            'bathroom' => $request->bathroom,
            'spacious_room' => $request->spacious_room,
            'name' => $request->name,
            'price' => $request->price,
            'address' => $request->address,
            'description' => $request->description,
            'id_amenities' => $request->id_amenities
        ];

        $attributes_image = [
            'image' => $request->image,
            'id_product' => $request->
        ]
    }
}
