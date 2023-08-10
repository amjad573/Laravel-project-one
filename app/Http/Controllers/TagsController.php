<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderByDesc('id')->paginate(10);
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:40',
        ]);

        Category::create([
            'title' => $request->title,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|min:5|max:40',
        ]);

        Category::find($id)->update([
            'title' => $request->title,

        ]);

        return redirect()->route('categories.index')->with('success', 'Post Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('categories.index')->with('success', 'Category Deleated!');
    }
}
