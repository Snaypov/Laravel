<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Providers\RouteServiceProvider;
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
        $category = Category::paginate(4);
        return view('admin.categor.categories', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categor.create-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:100', 'unique:categories'],
            'slug' => ['required', 'string', 'min:3', 'max:100', 'unique:categories'],
            'content' => ['string',  'nullable'],
        ]);

        
        // DB::table('categories')->insert([
        //     'name' => $request->name,
        //     'slug' => $request->slug,
        //     'content' => $request->content,
        //     'img' => $request->img,
        // ]);

        $category = Category::create($validated);
        $file = $request->file('img');
        if($file){
            $category->img = 'uploads/'. $file->store('/', 'uploads');
            $category->save();
        }

        return redirect(route('category.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', '=', $id)->first();
        // dd($category);
        return view('admin.categor.edit-category', compact('category'));
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
        $request->validate([
            'name' => ['required|unique:categories,name,'.$id, 'string', 'min:3', 'max:100'],
            'slug' => ['required|unique:categories,slug,'.$id, 'string', 'min:3', 'max:100'],
            'content' => ['string',  'nullable'],
            'img' => ['string', 'nullable'],
        ]);

        DB::table('categories')->where('id', '=', $id)->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'content' => $request->content,
            'img' => $request->img,
        ]);

       
        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('categories')->where('id', '=', $id)->delete();

        return redirect()->back();
    }
}
