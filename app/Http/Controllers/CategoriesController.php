<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Category;
use App\User;
use Carbon\Carbon;
use File;



class CategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()) $data['user_role'] = User::role();
        $data['date'] = Carbon::now()->format('l, d F Y');
        $data['categories'] = Category::all();
        if($data['categories']) return view('pages.categories.manage_categories')->with($data);
        else return redirect()->route('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()) $data['user_role'] = User::role();
        $data['date'] = Carbon::now()->format('l, d F Y');
        $data['category'] = Category::find($id);
        if($data['category']) return view('pages.categories.edit_category')->with($data);
        else return redirect()->route('home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'name' => 'required|unique:categories|min:5',
            'thumbnail' => 'nullable|mimes:jpeg,jpg,png,bmp,tiff,svg|max:4096',
        ));
        
        $category = Category::find($id);
        $category->slug = strtolower(Str::slug($request->name, '-'));
        $category->name = $request->name;

        if($request->file('thumbnail')){
            $file = $request->file('thumbnail');

            $name = strtolower(Str::random(10));
            $ext = strtolower($file->getClientOriginalExtension());
            $path = public_path('images/');

            $filename = $name.'-'.time().".".$ext;
            $file->move($path, $filename);
            $category->thumbnail = $filename;
        }
        
        $category->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->back();
    }
}
