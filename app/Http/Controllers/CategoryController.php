<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('query');

        $categorys = Category::where('title', 'like', '%' . $query . '%')->get();
    // return $categories;
        // $categorys = Category::get();
        return view('dashboard.category.index', compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            // return $request;
        $data = $request->validate([
            'title' => 'required|string',
            'discription' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        $path = $request->file('image')->store('items', 'public');

        Category::create([
            'title' => $data['title'],
            'discription' => $data['discription'],
            'image' => $path,
        ]);

        return redirect()->route('category.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category,$id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.category.edit', compact('category'));
    }

    public function item($id){
        $cat_id = $id;
        $items = Item::where('cat_id' , $id)->get();
        // return $items;
        return view('dashboard.category.item',compact('items','cat_id'));
        }
    /**
     * Update the specified resource in storage.
     */

public function update(Request $request, $id)
{
    $category = Category::findOrFail($id);

    $data = $request->validate([
        'title' => 'required|string',
        'discription' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
    ]);

    $updateData = [
        'title' => $data['title'],
        'discription' => $data['discription'],
    ];

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('items', 'public');
        $updateData['image'] = $path;
    }

    $category->update($updateData);

    return redirect()->route('category.index');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        Category::destroy($id);
        return back();
    }
}

