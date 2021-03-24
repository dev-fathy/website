<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Http\Requests\ValidateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('brands')->get();

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::get(['id', 'name']);
        return view('admin.category.create', ['brands' => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateCategoryRequest $request)
    {

        //dd($request->all());
        $validatedData = $request->validated();

        $category = Category::create($validatedData);

        $cat = Category::find($category->id);

        foreach ($request['brand_id'] as $brand_key => $brand_value) {
            $cat->brands()->attach([$brand_value]);
        }

        session()->flash('success', 'Deleted Successfuly');
        return redirect('categories');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::with('brands')->find($id);
        return view('admin.category.show', ['categories' => $categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cats = Category::with('brands')->find($id);
        $brands = Brand::get(['id', 'name']);
        return view('admin.category.edit', ['cats' => $cats, 'brands' => $brands]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidateCategoryRequest $request, $id)
    {
        $data = $request->except(['files', '_method', '_token', 'brand_id']);

        $edited_category = Category::find($id);

        Category::where('id', $edited_category->id)->update($data);

        //get the Pivot table
        $brands = DB::table('category_brand')
            ->Join('categories', 'category_brand.category_id', '=', 'categories.id')
            ->get();

        // detach brand_id value
        foreach ($brands as $saved_brand) {
            $edited_category->brands()->detach([$saved_brand->brand_id]);
        }
        // attach new records
        foreach ($request['brand_id'] as $updated_brand => $brand_value) {
            $edited_category->brands()->attach([$brand_value]);
        }

        session()->flash('success', 'Edited Successfuly');
        return redirect()->to('categories/' . $edited_category->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedCategory = Category::find($id);

        $deletedCategory->delete();

        return redirect('categories')->with('success', 'Deleted Successfuly');
    }
}
