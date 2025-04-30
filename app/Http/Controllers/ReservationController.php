<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // [POST] Create a new reservation
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'customer_id' => 'required|integer',
    'service_id' => 'required|integer',
    'reservation_time' => 'required|date',
    'details' => 'nullable|string',
            ]);

            $reservation = Reservation::create($data);

            return response()->json([
                'success' => true,
                'message' => 'Reservation created successfully',
                'data' => $reservation
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create reservation',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // [GET] Get all reservations
    public function index()
    {
        $reservations = Reservation::all();

        return response()->json([
            'success' => true,
            'message' => 'List of reservations',
            'data' => $reservations
        ]);
    }

    // [GET] Get one reservation
    public function show($id)
    {
        $reservation = Reservation::find($id);

        if (!$reservation) {
            return response()->json([
                'success' => false,
                'message' => 'Reservation not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Reservation details',
            'data' => $reservation
        ]);
    }

    // [PUT] Update reservation
    public function update(Request $request, $id)
    {
        $reservation = Reservation::find($id);

        if (!$reservation) {
            return response()->json([
                'success' => false,
                'message' => 'Reservation not found'
            ], 404);
        }

        $data = $request->validate([
            'customer_id' => 'sometimes|integer',
            'service_id' => 'sometimes|integer',
            'details' => 'nullable|string',
        ]);

        $reservation->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Reservation updated successfully',
            'data' => $reservation
        ]);
    }

    // [DELETE] Delete reservation
    public function destroy($id)
    {
        $reservation = Reservation::find($id);

        if (!$reservation) {
            return response()->json([
                'success' => false,
                'message' => 'Reservation not found'
            ], 404);
        }

        $reservation->delete();

        return response()->json([
            'success' => true,
            'message' => 'Reservation deleted successfully'
        ]);
    }
}
