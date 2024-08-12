<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        return view('admin.category.add-category');
    }
    public function storeCategory(Request $request)
    {
        $data = $request->validate([
            'name'=> 'string|required',
        ]);

        $category = Category::create($data);

        return redirect()->back()->with('msg', 'category added succesfuly!!');
    }


    public function listOfCategory()
    {
        $data = Category::latest()->paginate(10);

        return view('admin.category.category-list', compact('data'));
    }
}
