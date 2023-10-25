<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\CreateServiceRequest;

class LandingController extends Controller
{
    
    public function show_data()
    {
        try {
            // Cari produk berdasarkan ID
            $product = Product::all();
            $service = Service::all();
            // dd($product, $service);

            // return ResponseFormatter::success($product, 'Product found');
            return view('layouts.index', compact('product', 'service'));
        } catch (Exception $e) {
            return ResponseFormatter::error($e->getMessage(), 404);
        }
    }


    
}
