<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        
        $data = [
            'categories' => $categories,
        ];

        return view('category.index', $data);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
        ];

        $this->validate($request, $rules);
        try {
            $data = new Category();
            $data->name = $request->name;
            $data->description = $request->description;
            $data->save();

            return redirect()->route('category.index');
        } catch (Exception $e) {
            return Redirect::back()->withInput();
        }
    }

    public function show($id)
    {
        $category = Category::find($id);

        $data = [
            'category' => $category,
        ];

        return view('category.show', $data);
    }

    public function edit($id)
    {
        $category = Category::find($id);

        $data = [
            'category' => $category,
        ];

        return view('category.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'id' => ['required'],
            'name' => ['sometimes', 'string'],
            'description' => ['sometimes', 'string'],
        ];

        $this->validate($request, $rules);
        try {
            $data = Category::find($id);

            $data->name = $request->name;
            $data->description = $request->description;
            $data->save();

            return redirect()->route('category.index');
        } catch (Exception $e) {
            dd($e->getMessage());
            return Redirect::back()->withInput();
        }
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        try {
            $category->delete();
            return redirect()->route('category.index');
        } catch (Exception $e) {
            return redirect()->route('category.index');
        }
    }
}
