<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function create(){
        return view('admin.category.create');
    }
    public function store(CategoryRequest $request){
        $validate=$request->validated();
        $path=null;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $path=$file->store('category-image','public');
            $validate['image']=$path;
        }
        Category::create($validate);
        return view('admin.category.create');
    }

public function index(Request $request)
{
    $categories = Category::query()
        ->when($request->filled('search'), function ($query) use ($request) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('slug', 'like', "%{$search}%");
            });
        })
        ->when($request->filled('status'), function ($query) use ($request) {
            $query->where('status', $request->status);
        })
        ->orderBy('sort_order')
        ->orderByDesc('created_at')
        ->paginate(10);

    return view('admin.category.index', compact('categories'));
}

}
