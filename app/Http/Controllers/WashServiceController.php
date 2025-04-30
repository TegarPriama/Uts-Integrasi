<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WashServiceController extends Controller
{
    // [GET] /api/wash-services - Mengambil Semua Layanan
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'All wash services',
        ]);
    }

    // [GET] /api/wash-services/{id} - Mengambil Layanan Berdasarkan ID
    public function show($id)
    {
        if (isset($this->services[$id])) {
            return response()->json([
                'success' => true,
                'message' => 'Service found',
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Service not found'
        ], 404);
    }

    // [POST] /api/wash-services - Membuat Service Baru
    public function store(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer',
            'duration' => 'required|string'
        ]);

        // Menentukan ID baru (terakhir ID + 1)

        $service = [
            'name' => $request->name,
            'price' => $request->price,
            'duration' => $request->duration
        ];

        // Menambahkan service baru ke dalam data dummy

        return response()->json([
            'success' => true,
            'message' => 'Service created',
            'data' => $service
        ], 201);
    }

    // [PUT] /api/wash-services/{id} - Memperbarui Layanan
    public function update(Request $request, $id)
    {
        // Cek apakah service dengan ID ada
        if (!isset($this->services[$id])) {
            return response()->json([
                'success' => false,
                'message' => 'Service not found'
            ], 404);
        }

        // Validasi inputan
        $request->validate([
            'name' => 'sometimes|string',
            'price' => 'sometimes|integer',
            'duration' => 'sometimes|string'
        ]);

        // Update data service

        return response()->json([
            'success' => true,
            'message' => 'Service updated',
        ]);
    }

    // [DELETE] /api/wash-services/{id} - Menghapus Layanan
    public function destroy($id)
    {
        // Cek apakah service dengan ID ada
        if (!isset($this->services[$id])) {
            return response()->json([
                'success' => false,
                'message' => 'Service not found'
            ], 404);
        }

        // Menghapus service
        unset($this->services[$id]);

        return response()->json([
            'success' => true,
            'message' => 'Service deleted'
        ]);
    }
}
