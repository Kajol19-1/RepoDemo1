<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoProductController extends Controller
{
    public function demoproduct()
    {
        return view('newProduct');
    }
    public function submitDemoproduct(REQUEST $req )
    {
        $req->validate([
            "p_name"=>"required"
        ],
        [
            "p_name.required"=>"Please enter the correct Name"
        ]
    );
    return "Product added!";
    }
}
