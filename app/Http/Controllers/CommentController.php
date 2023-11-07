<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index($blogId)
{
 //
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin()
    {
        $comment = Comment::all();
        return view('Admin.comment.index', compact('comment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Front.comment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'comment' => 'required|max:100',
        'blogId' => 'required',
    ]);

    // Retrieve the loggedInUserId from the cache
    $userID = Cache::get('loggedInUserId');
//dd($userID);
    $comment = Comment::create([
        'comment' => $validatedData['comment'],
        'user_id' => $userID,
        'blog_id' => $validatedData['blogId'],
    ]);


    return redirect()->route('DetailsBlog', ['id' => $comment->blog_id])
        ->with('success', 'Comment has been created successfully.');
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
       //
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
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyAdmin($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect()->route('IndexAdminComment')->with('success','Blog has been deleted successfully');
    }

    protected function getMessages(){
        return $messages=[

            'comment.required'=>'Comment is required',
            'comment.max'=>'Comment should not surpasse 100 caractere',


        ];
      }


}
