<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Auth;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $categories = Category::orderBy('id', 'DESC')->get();
            return view('admin.categories.index',compact('categories'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:100|string|unique:categories,name',
            'description'=>'required|string'
        ]);
        $store =  Category::create([
            'name'=>$request->name,
            'description'=>$request->description
        ]);

        if ($store) {
            return redirect(route('categories.index'))->with("success","Your category added successfully");
        }else {
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {

        $category = Category::where('name', $name)->first();

        return view('admin.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request,[
            'name'=>'required|max:100|string|unique:categories,name',
            'description'=>'required|string'
        ]);
        $store =  Category::update([
            'name'=>$request->name,
            'description'=>$request->description
        ]);

        if ($store) {
            return redirect(route('categories.index'))->with("success","Your category updated successfully");
        }else {
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {

        if (Auth::check()) {
        $ca = Category::where('name', $category)->delete();
        return redirect(route('categories.index'))->with("success","Your category deleted successfully");
        }else {
            return redirect()->back()->with('error','you can not delete category');
        }


    }
}
