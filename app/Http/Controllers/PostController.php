<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest01;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
        $posts = Post::latest()->paginate(3);

        return view('posts.index')->with('posts',$posts);
    }

 
    public function create()
    {
          return view('posts.create')->with([
            'categories' =>Category::all(),
            'tag' =>Tag::all(),
          ]);

    }

   
    public function store(StorePostRequest01 $request)
    { 
        $request ->validate([ ]);
        

        $post = Post::create([
            'user_id'=>1,
            'category_id'=>$request->category_id,
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->content,
        ]);
        //   if(isset($request->tags)) {
        //     foreach ($request->tags as $tag){
        //         $post->tags()->attach($tag);
        //     }
        //   }
         
        return redirect()->route('posts.index');
    }

    
    public function show(Post $post)
    {
        return view('posts.show')->with([
            'post' =>$post,
             'recent_posts'=> Post::latest()->get()->except($post->id)->take(5),
             'tags'=>Tag::all(),
              'categories'=> Category::all(),

        ]);
        
    }

   
    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post'=> $post]);

       Gate::authorize('update-post',$post);
       return view('posts.edit')->with(['post'=>$post]);
    }

  
    public function update(StorePostRequest01 $request, Post $post)
    {
        
       Gate::authorize('update-post',$post);
      
        $post->update([
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->content,
        ]);

          return  redirect()->route('posts.show',['post'=>$post->id]);
    }

  
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');

    }
}
