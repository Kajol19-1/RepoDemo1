<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function createProduct()
    {
        return view('createproductfile');
    }

    public function submitProduct(Request $req)
    {
        $req->validate(
            [
                "p_name"=>"required|max:8",
                "p_id"=>"required|min:3",
                "c_phone"=>"required|regex: /^01[3-9]\d{8}$/"
            ],
            [
                "p_name"=>"Please Provide your product name",
                "p_name.max"=>"Please provide maximum 8 word",
                "p_id"=>"Please provide your product id",
                "p_id.min"=>"Please write minimum 3 word",
                "c_phone"=>"Please provide your phone number",
                "c_phone.regex"=>"please provide 01xxxxxxxx formate"
            ]
            );
            return "Product added!";
    }
}
