<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\productRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $productRequest)
    {

        foreach ($productRequest->file('images') as $image)
        {
            $image_name = time() . '-' . $image->getClientOriginalName();
            $image->move('adm/products/images', $image_name);
            $images[] = $image_name;
        }

            $products = new Product([
                'name'          =>   $productRequest->name,
                'prise'         =>   $productRequest->prise,
                'weight'        =>   $productRequest->weight,
                'voltage'       =>   $productRequest->voltage,
                'model'         =>   $productRequest->model,
                'power'         =>   $productRequest->power,
                'color'         =>   $productRequest->color,
                'category'      =>   $productRequest->categories[0],
                'images'        =>   $images,
                'items'         =>   $productRequest->items,
                'body'          =>   $productRequest->body,
            ]);
        $store = $products->save();
            if($store)
            {
                Alert::success('محصول جدید','با موفقیت افزوده شد');
            }
            else
            {
                Alert::error('خطا','محصول ایجاد نشد');
            }
            return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(productRequest $productRequest, Product $product)
    {
        if ($productRequest->file('images') !== null)
        {
            foreach ($productRequest->file('images') as $image)
            {
                $image_name = time() . '-' . $image->getClientOriginalName();
                $image->move('adm/products/images', $image_name);
                $images[] = $image_name;
            }
            $update = $product->update([
                'name'          =>   $productRequest->name,
                'prise'         =>   $productRequest->prise,
                'weight'        =>   $productRequest->weight,
                'voltage'       =>   $productRequest->voltage,
                'model'         =>   $productRequest->model,
                'power'         =>   $productRequest->power,
                'color'         =>   $productRequest->color,
                'category'    =>   $productRequest->categories[0],
                'images'        =>   $images,
                'items'         =>   $productRequest->items,
                'body'          =>   $productRequest->body,
            ]);
        }else
            $update = $product->update([
                'name'          =>   $productRequest->name,
                'prise'         =>   $productRequest->prise,
                'weight'        =>   $productRequest->weight,
                'voltage'       =>   $productRequest->voltage,
                'model'         =>   $productRequest->model,
                'power'         =>   $productRequest->power,
                'color'         =>   $productRequest->color,
                'category'      =>   $productRequest->categories[0],
                'items'         =>   $productRequest->items,
                'body'          =>   $productRequest->body,
        ]);
        if($update)
        {
            Alert::success('محصول جدید','با موفقیت تغییر بافت');
        }
        else
        {
            Alert::error('خطا','تغییری ایجاد نشد');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $delete = $product->delete();
        if($delete)
        {
            Alert::success('محصول مورد نظر','با موفقیت حذف شد');
        }else{
            Alert::error('خطا','عملیات حذف با مشکلی مواجه شد');
        }
        return back();
    }
}
