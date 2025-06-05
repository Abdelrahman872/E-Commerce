<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = Item::all();
        if ($item->count() > 0) {
            return response()->json([
                'data' => $item,
                'message' => 'item fetched successfully',
               'status' => 200,
            ],200);
        } else {
            return response()->json([
                'message' => 'item does not exist.',
                'status' => 404,
            ],404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'price_disc' => 'required|numeric',
            'made_in' => 'required|string',
            'details' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        $item = Item::create($data);

        return response()->json([
            'message' => 'item created successfully',
            'data' => $item
        ], 201);
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
    public function update(Request $request,$id)
    {
        $item = Item::find($id);

              $data = $request->validate([
                'title' => 'required|string',
                'description' => 'required|string',
                'price' => 'required|numeric',
                'discount' => 'required|numeric',
                'price_disc' => 'required|numeric',
                'made_in' => 'required|string',
                'details' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
              ]);

              $item->update($data);

              return response()->json([
                  'message' => 'item updated successfully',
                  'data' => $item
              ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            $item = Item::find($id);

        if($item){

           $item->delete();
          return response()->json([
               'message' => 'item deleted successfully',
           ], 200);

       }else{
           return response()->json([
               'message' => 'item noooo successfully',
           ], 404);

        }
    }
}
