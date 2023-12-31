<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;

class ProductController extends Controller
{

    //create
    public function create(CreateProductRequest $request)
    {
        try {
            // Upload photos
            if ($request->hasFile('img_product')) {
                $path = $request->file('img_product')->store('public/img_products');
            }

            // Create employee
            $product = Product::create([
                'name' => $request->name,
                'img_product' => $path,
                'user_id' => $request->user_id,
            ]);

            if (!$product) {
                throw new Exception('product not created');
            }

            return ResponseFormatter::success($product, 'product created');
        } catch (Exception $e) {
            return ResponseFormatter::error($e->getMessage(), 500);
        }
    }

    public function show()
    {
        try {
            // Cari produk berdasarkan ID
            $product = Product::all();
            dd($product);

            // return ResponseFormatter::success($product, 'Product found');
            return view('layouts.index', compact('product'));
        } catch (Exception $e) {
            return ResponseFormatter::error($e->getMessage(), 404);
        }
    }

    public function detail($id)
    {
        try {
            // Cari produk berdasarkan ID
            $product = Product::findOrFail($id);

            return ResponseFormatter::success($product, 'Product found');
        } catch (Exception $e) {
            return ResponseFormatter::error($e->getMessage(), 404);
        }
    }
}
