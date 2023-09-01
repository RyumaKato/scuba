<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Area;
use App\Models\Entry;
use App\Models\Level;
use App\Models\Depth;
use App\Models\Month;
use App\Models\Evaluation;
use Cloudinary;

class PostController extends Controller
{
    public function index(Request $request, Post $post)
    {
        $keyword = $request->input('keyword');
        $area = $request->input('area');
        $entry = $request->input('entry');
        $level = $request->input('level');
        $month = $request->input('month');
        $evaluation = $request->input('evaluation');
        $query = Post::query();
        
        if(!empty($area)) {
            $query->where('area', 'LIKE', $area);
        }
        if(!empty($medium)) {
            $query->where('entry', 'LIKE', $entry);
        }
        if(!empty($medium)) {
            $query->where('level', 'LIKE', $level);
        }
        if(!empty($medium)) {
            $query->where('month', 'LIKE', $month);
        }
        if(!empty($medium)) {
            $query->where('evaluation', 'LIKE', $evaluation);
        }
        if(!empty($keyword)) {
            $query->where('point', 'LIKE', "%{$keyword}%")
                ->orWhere('spot', 'LIKE', "%{$keyword}%")
                ->orWhere('shop', 'LIKE', "%{$keyword}%")
                ->orWhere('comment', 'LIKE', "%{$keyword}%");
        
        $posts = $query->get();

        return view('posts.index', compact('posts', 'keyword'));
        $keyword -> input('keyword');
        }
        else{
        return view('posts.index')->with(['posts'=> $post->getPaginateByLimit()]);
        }
    }
    
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    
    public function create(Area $area, Entry $entry, Level $level, Month $month, Evaluation $evaluation)
    {
        return view('posts.create')->with(['areas' => $area->get(), 
                                           'entries' => $entry->get(),
                                           'levels' => $level->get(),
                                           'months' => $month->get(),
                                           'evaluations' => $evaluation->get()]);
    
      
    }

    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
        if($request->file('image')){
        $image_url= Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input += ['image_url' => $image_url]; 
        }
        $input += ['user_id' => $request->user()->id];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post, Area $area, Entry $entry, Level $level, Month $month, Evaluation $evaluation)
    {
        return view('posts.edit')->with(['post' => $post,
                                         'areas' => $area->get(),
                                         'entries' => $entry->get(),
                                         'levels' => $level->get(),
                                         'months' => $month->get(),
                                         'evaluations' => $evaluation->get()]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
        if($request->file('image')){
        $image_url= Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input += ['image_url' => $image_url]; 
        }
        $input_post += ['user_id' => $request->user()->id];    
        $input_post = $request['post'];
        $post->fill($input_post)->save();

    return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
    $post->delete();
    return redirect('/index');
    }
}