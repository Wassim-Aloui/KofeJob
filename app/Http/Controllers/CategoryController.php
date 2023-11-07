<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use function redirect;
use function response;
use function view;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories=Category::all();
        return view('Admin.Categories.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');
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
        $validator = Validator::make($request->all(), [
            'description' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'name' => 'required|string|max:255',



        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()->toArray()]);
        } else {
            // If validation is successful, create the Projet and return a success response
            Category::create($request->all());
            if ($request->ajax()) {
                // If it's an AJAX request, return a JSON success response
                return response()->json(['success' => true]);
            } else {
                // If it's not an AJAX request, redirect to the 'projet' route with a success message
                return redirect('category')->with('status', 'Category Added!');
            }        }

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
        $student = Category::find($id);
        return view('Admin.Categories.index')->with('students', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = Category::find($id);
return response()->json([
    'status'=>200,
    'category'=>$category,
]) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
      $id=$request->input('cat_id');

      $category = Category::find($id);
$category->name=$request->input('name');
$category->slug=$request->input('slug');
$category->description=$request->input('description');
        $category->update();
        return redirect()->back()->with('status', 'category Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=$request->input('delete_id');
        $category=Category::find($id);
        $category->delete();
        return redirect()->back()->with('status', 'Category deleted!');
    }



}
