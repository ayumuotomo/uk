<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::Check()){
            $user=\Auth::user();
            $post=$user->posts()->orderBy('created_at','desc')->pagenate(10);
            //$favorite=$user->favorites()->orderBy('created_at','desc')

            $data=['user'=>$user,'posts'=>$posts,//'favorites'=>$favorites
            ];
            
            $date += $this -> counts($user);
            
            return view('users.show',$data);}else{
                return view('welcome');}
            
        }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $this->validate($request, [
            'subcategory' => 'required|max191',
            'title'=>'required|max:25',
            'subject' => 'required|max25',
            'detail' => 'required|max:191',
        ]);

        $request->user()->posts()->create([
            'subcategory' => $request->subcategory,
             'title' =>  $request->title,
           'subject' =>  $request->subject,
            'content' => $request->content,
            
        ]);

        return redirect()->back();
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
         $post = \App\Post::find($id);

        if (\Auth::id() === $post->user_id) {
            $post->delete();
        }

        return redirect()->back();
    }
}
