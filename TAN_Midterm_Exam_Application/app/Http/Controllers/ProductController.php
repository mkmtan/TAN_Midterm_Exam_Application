<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show() {
        $data = array(
            'Author' => "Kohei Horikoshi",
            'Favorite' => "Midoriya Izuku",
            'Gender' => "M",
            'Bestie'=> "Kaa-chan"
        );
        return view('anime', $data);
    }
}
