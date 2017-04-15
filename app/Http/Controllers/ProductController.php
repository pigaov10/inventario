<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products as Products ;
use App\Http\Requests;

class ProductController extends Controller
{
      public function __construct(Products $products)
      {
        $this->products = $products;
      }

      public function index()
      {
        header('Content-Type: application/json');
        $data = $this->products->with('categories')->get()->toJson();
        return $data;
      }
}
