<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Exception;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        
        $data = [
            'products' => $products,
        ];

        return view('product.index', $data);
    }

    public function create()
    {
        $categories = Category::all();

        $data = [
            'categories' => $categories,
        ];
        
        return view('product.create', $data);
    }

    public function store(Request $request)
    {
        $rules = [
            'name'  => ['required', 'string'],
            'price' => ['required', 'integer'],
            'description' => ['required', 'string'],
            'category_id' => ['required'],
        ];

        $this->validate($request, $rules);
        try {
            $data = new Product();
            $data->name = $request->name;
            $data->price = $request->price;
            $data->description = $request->description;
            $data->category_id = $request->category_id;
            $data->save();
            return redirect()->route('product.index');
        }  catch (Exception $e) {
            return Redirect::back()->withInput();
        }
    }

    public function show($id)
    {
        $product = Product::find($id);

        $data = [
            'product' => $product,
        ];

        return view('product.show', $data);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        $data = [
            'product' => $product,
            'categories' => $categories,
        ];

        return view('product.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name'  => ['sometimes', 'string'],
            'price' => ['sometimes', 'integer'],
            'description' => ['sometimes', 'string'],
            'category_id' => ['sometimes'],
        ];

        $this->validate($request, $rules);
        try {
            $data = Product::find($id);
            $data->name = $request->name;
            $data->price = $request->price;
            $data->description = $request->description;
            $data->category_id = $request->category_id;
            $data->save();
            return redirect()->route('product.index');
        }  catch (Exception $e) {
            return Redirect::back()->withInput();
        }
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        try {
            $product->delete();
            return redirect()->route('product.index');
        } catch (Exception $e) {
            return redirect()->route('product.index');
        }
    }
}
