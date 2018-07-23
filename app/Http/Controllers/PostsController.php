<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    { 
        $data = [];
        if(\Auth::Check()){
            $user=\Auth::user();
           
            $posts = Post::where('subcategory', $name)->paginate(20);
            $cat = config('app.category');
            
            $data=[
                'user'=>$user,
                'posts'=>$posts,
                'subcategory' => $cat[$name],
            ];
            
          /** $date += $this -> counts($user);
            
            return view('users.show',$data);}else{ */
               return view('subcategory.index', $data);
                
            }
            
            
           
        
            
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
            'subcategory' => 'required|max:191',
            'title'=>'required|max:25',
            'subject' => 'required|max:25',
            'detail' => 'required|max:191',
        ]);
        $request->user()->posts()->create([
            'subcategory' => $request->subcategory, 
            'title' =>  $request->title,
            'subject' =>  $request->subject,
            'detail' => $request->detail,
        ]);
        return redirect()->back();
        
        
        
        
         /**if(\Auth::check(){
            $this->validate($request, [
            'subcategory' => 'required|max191',
            'title'=>'required|max:25',
            'subject' => 'required|max25',
            'detail' => 'required|max:191',
        ])**/
        
       /** $post=new Post;
        $post->subcategory=$request->subcategory;
        $post->title=$request->title;
        $post->subject=$request->subject;
        $post->detail=$request->detail;
        $post->save();
    
        }
    
       
        /**$request->user()->posts()->create([
            'subcategory' => $request->subcategory,
             'title' =>  $request->title,
           'subject' =>  $request->subject,
            'content' => $request->content,
            
        ]);*/

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
       // echo $id; exit;
        $post = Post::find($id) ;
         return view('posts.detail', [
            'post' => $post,
        ]);
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
    
    
    public function search(Request $request) {
        
       
        #キーワード受け取り
            
            $keyword = $request->input('keyword');
            
            #クエリ生成
            $query = Post::query();
 
            #もしキーワードがあったら
            if(!empty($keyword))
            {
                $query->where('title','like','%'.$keyword.'%')->orWhere('subject','like','%'.$keyword.'%');
            }
            
            
            #ページネーション
            $posts = $query->orderBy('created_at','desc')->paginate(10);
            
            $user = \Auth::user();
           
          
            $data = [
                'user' => $user,
                'posts' => $posts,
                
                'keyword'=>$keyword,
                ];
                
            
            return view('posts.search',$data);
    }
    
}