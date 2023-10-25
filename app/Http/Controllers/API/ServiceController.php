<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateServiceRequest;

class ServiceController extends Controller
{
    //create
    public function create(CreateServiceRequest $request)
    {
        try {
            // Upload photos
            if ($request->hasFile('img_service')) {
                $path = $request->file('img_service')->store('public/img_services');
            }

            // Create employee
            $service = Service::create([
                'name' => $request->name,
                'img_service' => $path,
                'product_id' => $request->product_id,
            ]);

            if (!$service) {
                throw new Exception('service not created');
            }

            return ResponseFormatter::success($service, 'product created');
        } catch (Exception $e) {
            return ResponseFormatter::error($e->getMessage(), 500);
        }
    }

    public function show()
    {
        try {
            // $service = Service::findOrFail($id);
            $service = Service::all();
            // dd($service);
            // return ResponseFormatter::success($service, 'service found');
            return view('layouts.index', ['services' => $service]);
        } catch (Exception $e) {
            return ResponseFormatter::error($e->getMessage(), 404);
        }
    }

    public function detail($id)
    {
        try {
            $service = Service::findOrFail($id);
            dd($service);
            return ResponseFormatter::success($service, 'service found');
        } catch (Exception $e) {
            return ResponseFormatter::error($e->getMessage(), 404);
        }
    }
}
