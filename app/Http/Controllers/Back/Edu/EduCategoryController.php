<?php

namespace App\Http\Controllers\Back\Edu;

use App\Http\Controllers\Controller;
use App\Models\Edu\EduCategory;
use Illuminate\Http\Request;

class EduCategoryController extends Controller {

    public function __construct()
    {
        $this->middleware('Admin');
    }

    public function indexCategory()
    {
        $categories = EduCategory::all();
        return view('edu.categories.index',compact('categories'));
    }

    public function createCategory()
    {
        $categories = EduCategory::where('parent_id', null)->orderby('category_name', 'asc')->get();
        return view('edu.categories.create', compact('categories'));
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'parent_id' => 'nullable'
        ]);

        EduCategory::create([
            'category_name' => $request->category_name,
            'parent_id' =>$request->parent_id
        ]);

        return redirect()->back()->with('success', 'با موفقیت انجام شد.');
    }

    public function editCategory($id)
    {
        $category = EduCategory::findOrFail($id);
        $categories = EduCategory::where('parent_id', null)->where('id', '!=', $category->id)->orderby('category_name', 'asc')->get();
        return view('edu.categories.edit',compact('category','categories'));
    }

    public function updateCategory($id, Request $request)
    {
        $category = EduCategory::findOrFail($id);
        $request->validate([
            'category_name'     => 'required',
            'parent_id'=> 'nullable'
        ]);
        if($request->category_name != $category->category_name || $request->parent_id != $category->parent_id)
        {
            if(isset($request->parent_id))
            {
                $checkDuplicate = EduCategory::where('category_name', $request->category_name)->where('parent_id', $request->parent_id)->first();
                if($checkDuplicate)
                {
                    return redirect()->back()->with('error', 'دسته بندی وجود دارد.');
                }
            }
            else
            {
                $checkDuplicate = EduCategory::where('category_name', $request->category_name)->where('parent_id', null)->first();
                if($checkDuplicate)
                {
                    return redirect()->back()->with('error', 'دسته بلندی وجود دارد.');
                }
            }
        }

        $category->category_name = $request->category_name;
        $category->parent_id = $request->parent_id;
        $category->save();
        return redirect()->back()->with('success', 'با موفقیت انمجام شد.');
    }

    public function deleteCategory($id)
    {
        $category = EduCategory::findOrFail($id);
        if(count($category->subcategory))
        {
            $subcategories = $category->subcategory;
            foreach($subcategories as $cat)
            {
                $cat = EduCategory::findOrFail($cat->id);
                $cat->parent_id = null;
                $cat->save();
            }
        }
        $category->delete();
        return redirect()->back()->with('delete', 'با موفقیت انجام شد.');
    }
}
