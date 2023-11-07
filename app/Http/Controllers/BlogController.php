<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::with('author')->get();
       $cmt = Blog::with('user')->get();
        return view('Front.blog.index', compact('blog','cmt'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin()
    {
        $blog = Blog::all();
        return view('Admin.blog.indexAdmin', compact('blog'));
    }

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Front.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'titre' => 'required||min:5',
        'description' => 'required',
        'image' => 'required',
    ]);

    // Retrieve the loggedInUserId from the cache 
    $userID = Cache::get('loggedInUserId');

    $path = public_path('../public/uploads');

    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }

    $file = $request->file('image');

    $fileName = $file->getClientOriginalName();
    $file->move($path, $fileName);

    Blog::create([
        'titre' => $request->titre,
        'description' => $request->description,
        'auteur' => $userID,
        'image' => $fileName,
    ]);

    return redirect()->route('Index')->with('success', 'Blog has been created successfully.');
}

public function countCommentsPerBlog($blogId)
{
    $commentCount = Comment::where('blog_id', $blogId)->count();
    
    return $commentCount;
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        $comments = Comment::where('blog_id', $id)->get();
        $commentCount = $this->countCommentsPerBlog($id);
        return view('Front.blog.details', compact('blog', 'comments','commentCount'));
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('Front.blog.edit',compact('blog'));
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
        'titre' => 'required',
        'description' => 'required',
        'image' => 'required',
    ]);

    // Retrieve the existing blog entry by its ID
    $blog = Blog::findOrFail($id);
    $userID = Cache::get('loggedInUserId', 0);

    // Check if a new image file was uploaded
    if ($request->hasFile('image')) {
        $path = public_path('../public/uploads');
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $file->move($path, $fileName);

        // Update the image field in the blog entry
        $blog->image = $fileName;
    }

    // Update other fields
    $blog->titre = $request->titre;
    $blog->description = $request->description;
    $blog->auteur = $userID;

    // Save the updated blog entry
    $blog->save();

    return redirect()->route('Index')->with('success', 'Blog Has Been updated successfully');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('Index')->with('success','Blog has been deleted successfully');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyAdmin($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('IndexAdmin')->with('success','Blog has been deleted successfully');
    }

 

    protected function getMessages(){
        return $messages=[
         
            'titre.required'=>'Title is required',
            'titre.min'=>'Title should be more than 5 caracteres',
            'description.required'=>'Description is required',


         
        ];
      }
}