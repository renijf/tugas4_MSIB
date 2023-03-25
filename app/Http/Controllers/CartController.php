<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Exception;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::all();
        
        $data = [
            'carts' => $carts,
        ];
        return view('cart.index', $data);
    }

    public function create()
    {
        $products = Product::all();

        $data = [
            'products' => $products,
        ];

        return view('cart.create', $data);
    }

    public function store(Request $request)
    {
        $rules = [
            'qty' => ['required', 'integer'],
            'product_id' => ['required'],
        ];

        $this->validate($request, $rules);
        try {
            $data = new Cart();
            $data->product_id = $request->product_id;
            $data->qty = $request->qty;
            $data->save();
            return redirect()->route('cart.index');
        }  catch (Exception $e) {
            return Redirect::back()->withInput();
        }
    }

    public function edit($id)
    {
        $cart = Cart::find($id);
        $products = Product::all();

        $data = [
            'cart' => $cart, 
            'products' => $products,
        ];

        return view('cart.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'qty' => ['sometimes', 'integer'],
            'product_id' => ['sometimes'],
        ];

        $this->validate($request, $rules);
        try {
            $data = Cart::find($id);
            $data->product_id = $request->product_id;
            $data->qty = $request->qty;
            $data->save();
            return redirect()->route('cart.index');
        }  catch (Exception $e) {
            return Redirect::back()->withInput();
        }
    }

    public function destroy($id)
    {
        $category = Cart::find($id);
        try {
            $category->delete();
            return redirect()->route('cart.index');
        } catch (Exception $e) {
            return redirect()->route('cart.index');
        }
    }
}
