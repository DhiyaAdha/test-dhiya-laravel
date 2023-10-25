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
}
