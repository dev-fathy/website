<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests\ValidateProductRequest;
use Illuminate\Http\Request;
use App\File;
use App\Brand;
use App\Category;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('categories')->orderBy('id', 'asc')->get();

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $brands = Brand::get(['id','name']);
        $categories = Category::get(['id','title']);
        return view('admin.product.create',['brands' => $brands, 'categories' => $categories]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateProductRequest $request)
    {

        //dd($request->all());
        $validatedData = $request->validated();
               
        if ($request->hasFile('image')) {
            
            $destination_path = 'public/images/products';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $validatedData['image'] = $image_name;  
        }

        //dd($validatedData);
        
        $product = Product::create($validatedData);

        $prod = Product::find($product->id);


            $prod->categories()->attach([$request->category_id]);
        

        session()->flash('success', 'Deleted Successfuly');
        return redirect('product');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prods = Product::find($id);
        return view('admin.product.show',['prods'=>$prods]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prods = Product::find($id);
        return view('admin.product.edit',['prods'=>$prods]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidateProductRequest $request, $id)
    {
        //

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'SKE' => ['required'],
            'price' => ['required'],
        ]);

        $input = request()->except(['files','_method','_token']);

        $edited_product = Product::find($id);

        if ($request->has('image')) {

            $destination_path = 'public/images/products';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $input['image'] = $image_name;           
        }


        Product::where('id',$edited_product->id)->update($input);
        session()->flash('success', 'Edited Successfuly');
        return redirect()->to('product/'.$edited_product->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedProduct = Product::find($id);

        $deletedProduct->delete();

        return redirect('product')->with('success', 'Deleted Successfuly');
    }
}
