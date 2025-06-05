<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Item_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('dashboard.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)

    {
        $cat_id =$id;

        return view('dashboard.items.create',compact('cat_id'));
    }

public function detalis($id){

    $items = Item_image::where('item_id' , $id)->get();
    $product = Item_image::with('item')->where('item_id' , $id)->first();

    return view('dashboard.items.details',compact('items','product'));
}

    /**
     * Store a newly created resource in storage.
     */


public function image_item($id){
    $items = Item_image::where('item_id' ,$id)->get();
    $item_id = $id ;

    // return to_route('image_item', ['item_id' => $item_id ]);
    return view('dashboard.items.image_item',compact('items','item_id'));
}

    public function store(Request $request)
    {
        // return $request;
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'price_disc' => 'required|numeric',
            'made_in' => 'required|string',
            'details' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,|max:10048',
            'cat_id' => 'required|exists:categories,id'
        ]);

      $item = Item::create([
        'cat_id' => $data['cat_id'],
        'title' => $data['title'],
        'description' => $data['description'],
        'price' => $data['price'],
        'discount' => $data['discount'],
        'price_disc' => $data['price_disc'],
        'made_in' => $data['made_in'],
        'details' => $data['details'],
        'image' => $request->hasFile('images') ? $request->file('images')[0]->store('item', 'public') : null,
    ]);

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $imageFile) {
            $path = $imageFile->store('item_image', 'public');
            Item_image::create([
                'item_id' => $item->id,
                'image' => $path,
            ]);
        }




        return to_route('category.item', ['id' => $data['cat_id'] ]);

    }
}

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $items = Item::findOrFail($id);
        return view('dashboard.items.edit', compact('items'));
    }

    /**
     * Update the specified resource in storage.
     */

public function item_photo(Request $request){
    $item_id = $request->item_id;
    $request->validate([
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:10048',
    ]);

    foreach ($request->file('images') as $imageFile) {
        $path = $imageFile->store('uploads', 'public');

    Item_image::create([
        'item_id' =>$item_id,
        'image' => $path,
    ]);
    }

    session()->flash('success', 'تم اضافه الصور بنجاح فى بيانات الصنف.');
    return to_route('image_item', ['id' => $item_id]);
}



    public function update(Request $request,$id)
    {

        $item = Item::findOrFail($id);
        // return $item->cat_id;
        $data = $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        $updateData = [
            'title' => $data['title'],
            'description' => $data['description'],
        ];

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('items', 'public');
            $updateData['image'] = $path;
        }

        $item->update($updateData);
// return "hhhhh";
        // return redirect()->route('category.index');
        return to_route('category.item', $item->cat_id);

        // return redirect()->route('category.index');
//         // return $request;
//         $items = Item::findOrFail($id);
//         $data = $request->validate([
//             'title' => 'required|string',
//             'description' => 'required|string',
//             // 'price' => 'required|numeric',
//             // 'discount' => 'required|numeric',
//             // 'price_disc' => 'required|numeric',
//             // 'made_in' => 'required|string',
//             // 'details' => 'required|string',
//             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
//         ]);



//             // رفع الصورة الجديدة
//             if ($request->hasFile('image')) {
//                 $path = $request->file('image')->store('items', 'public');
//             }

// $items->update([
//     'title' => $data['title'],
//     'description' => $data['description'],
//     // 'price' => $data['price'],
//     // 'discount' => $data['discount'],
//     // 'price_disc' => $data['price_disc'],
//     // 'made_in' => $data['made_in'],
//     // 'details' => $data['details'],
//     'image' => $path,
// ]);
//         return redirect()->route('item.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Item::destroy($id);
        return back();
    }
}
