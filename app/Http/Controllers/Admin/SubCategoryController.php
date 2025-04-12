<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\Str;
class SubCategoryController extends Controller
{
    // Show all subcategories
    public function index()
    {
        $subCategories = SubCategory::with('category')->get();
        return view('sub_categories.index', compact('subCategories'));
    }

    // Show the form for creating a new subcategory
    public function create()
    {
        $categories = Category::all();
        return view('sub_categories.create', compact('categories'));
    }

    // Store a newly created subcategory
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:sub_categories,code',
            'slug' => 'required|string|max:255|unique:sub_categories,slug',
            'category_id' => 'required|exists:categories,id',
            'sub_category_type_id' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'is_active' => 'required|boolean',
        ]);

        SubCategory::create($request->all());

        return redirect()->route('sub-categories.index')->with('success', 'Subcategory created successfully!');
    }

    // Show the form for editing the specified subcategory
    public function edit($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $categories = Category::all();
        return view('sub_categories.edit', compact('subCategory', 'categories'));
    }

    // Update the specified subcategory
    public function update(Request $request, $id)
    {
        $subCategory = SubCategory::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:sub_categories,code,' . $subCategory->id,
            'slug' => 'required|string|max:255|unique:sub_categories,slug,' . $subCategory->id,
            'category_id' => 'required|exists:categories,id',
            'sub_category_type_id' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'is_active' => 'required|boolean',
        ]);

        $subCategory->update($request->all());

        return redirect()->route('sub-categories.index')->with('success', 'Subcategory updated successfully!');
    }

    // Delete the specified subcategory
    public function destroy($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->delete();

        return redirect()->route('sub-categories.index')->with('success', 'Subcategory deleted successfully!');
    }
}
