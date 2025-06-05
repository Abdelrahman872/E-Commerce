<?php

namespace App\Http\Controllers;

use App\Models\Item_image;
use Illuminate\Http\Request;

class ItemImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item_image::get();
        return view('item_image.index', compact('items'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('item_image.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'item_id' => 'exists:items,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        $path = $request->file('image')->store('item_image', 'public');

        Item_image::create([
            'item_id' => $data['item_id'],
            'image' => $path,
        ]);

        return redirect()->route('item_image.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Item_image $item_image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item_images = Item_image::findOrFail($id);
        return view('edit', compact('item_images'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $items = Item_image::findOrFail($id);
        $data = $request->validate([
            'item_id' => 'exists:items,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);


            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('item_image', 'public');
            }

$items->update([
    'item_id' => $data['item_id'],

    'image' => $path,
]);
        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Item_image::destroy($id);
        return back();
    }
}
