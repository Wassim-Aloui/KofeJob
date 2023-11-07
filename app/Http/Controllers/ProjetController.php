<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use function redirect;
use function response;
use function view;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        //
//        $projets=Projet::all();
//        return view('Admin.Projet.index')->with('projets',$projets);
//    }*

    public function index()
    {
        $userID = Cache::get('loggedInUserId');

        $projets = Projet::where('user_id', $userID)->get();
        $categories = Category::all(); // Retrieve all categories from the database
        return view('Admin.Projet.index', compact('projets', 'categories'));
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

//    public function store(Request $request)
//    {
//
//
//        $input=$request->all();
//        Projet::create($input);
//        return redirect('projet')->with('status', 'Projet Addedd!');
//
//    }
//    public function store(Request $request)
//    {
//        // Perform form validation
//        $validator = Validator::make($request->all(), [
//            'title' => 'required',
//            'budget' => 'required|numeric|min:1',
//            // Add more validation rules for other fields as needed
//        ]);
//
//        if ($validator->fails()) {
//            return response()->json(['success' => false, 'errors' => $validator->errors()->all()]);
//        } else {
//            // If validation is successful, create the Projet and return a success response
//            Projet::create($request->all());
//            return response()->json(['success' => true]);
//        }
//    }
    public function store(Request $request)
    {
        $userID = Cache::get('loggedInUserId');

        // Perform form validation
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'budget' => 'required|numeric|min:0',
            'progress' => 'required|numeric|min:0|max:100',
            'technology' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'company' => 'required|string|max:255',
            'start_date' => 'required|date',
            'due_date' => 'required|date|after:start_date',

            // Add more validation rules for other fields as needed
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()->toArray()]);
        } else {
            $data = $request->all();
            $data['user_id'] = $userID;
            // If validation is successful, create the Projet and return a success response
            Projet::create($data);
            if ($request->ajax()) {
                // If it's an AJAX request, return a JSON success response
                return response()->json(['success' => true]);
            } else {
                // If it's not an AJAX request, redirect to the 'projet' route with a success message
                return redirect('projetFront')->with('status', 'Projet Added!');
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
       // $projet=Projet::find($id);
        $projet = Projet::with('category')->find($id);
        return response()->json(['projet' => $projet]);

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
        $projet = Projet::with('category')->find($id);
        return response()->json([
            'status'=>200,
            'projet'=>$projet,
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
        $id=$request->input('proj_id');
        $projet=Projet::find($id);
       $projet->title=$request->input('title');
        $projet->budget=$request->input('budget');
        $projet->progress=$request->input('progress');
        $projet->due_date=$request->input('due_date');
        $projet->start_date=$request->input('start_date');
        $projet->company=$request->input('company');
        $projet->technology=$request->input('technology');
        $projet->category_id = $request->input('category_id');

        $projet->update();
        return redirect()->back()->with('status', 'projet Updated!');







    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id=$request->input('delete_id');
        $projet=Projet::find($id);
        $projet->delete();
        return redirect()->back()->with('status', 'Projet deleted!');

    }
//    public function indexFront()
//    {
//        //
//        $categories=Category::all();
//        $projets=Projet::all();
//        return view('Front.Project.projet', compact('projets', 'categories'));
//
//    }
    public function indexFront(Request $request)
    {
        $categories = Category::all();
        $categorySlug = $request->input('category'); // Get the category slug from the request

        // Modify the query to filter by category if a category slug is provided
        $projetsQuery = Projet::query();

        if (!empty($categorySlug)) {
            $projetsQuery->whereHas('category', function ($query) use ($categorySlug) {
                $query->where('slug', $categorySlug);
            });
        }

        $projets = $projetsQuery->get();

        return view('Front.Project.projet', compact('projets', 'categories'));
    }

    public function indexFront2()
    {
        //
        $projets=Projet::all();
        return view('Front.Project.index')->with('projets',$projets);
    }
}
