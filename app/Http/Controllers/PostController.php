<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\post; //跟他說model從哪來
class PostController extends Controller
{
    public function index(){
        $posts = post::all();   //where('inputer','劉威佑') -> get();

        return view('PostIndex',
            ['posts'=>$posts]        
        );
    }
    public function create(){
        return view('create');
    }
    public function delete($id){
        $post = post::find($id);
        $post->delete();

        return redirect()->route('index');//->with('notice','文章已刪除');
    }

    public function store(Request $request){
        post::create([
            'content'=>$request->content,
            'inputer'=>'喇叭間'
        ]);
        return redirect()->route('index');
    }

    public function edit($id){
        $post = post::find($id);

        return view('edit',['post'=>$post]);
    }

    public function update(Request $request,$id){
        $post = post::find($id);

        $post->update(['content'=>$request->content]);
        return redirect()->route('index');
    }

}
