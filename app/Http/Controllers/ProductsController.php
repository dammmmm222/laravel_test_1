<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    //
    public function index(){
        $check = DB::select("SELECT * FROM product");
        dd($check);
    }
}
