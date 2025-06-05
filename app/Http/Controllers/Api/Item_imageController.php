<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item_image;
use Illuminate\Http\Request;

class Item_imageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item_image = Item_image::all();
        if ($item_image->count() > 0) {
            return response()->json([
                'data' => $item_image,
                'message' => 'item_image fetched successfully',
               'status' => 200,
            ],200);
        } else {
            return response()->json([
                'message' => 'item_image does not exist.',
                'status' => 404,
            ],404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
