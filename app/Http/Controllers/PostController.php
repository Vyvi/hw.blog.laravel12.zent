<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Post;
use App\Tag;
use App\Category;
use \Illuminate\Support\Str;

class PostController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guest');
    }
    public function index(){
    	return view('admins.postList');
    }
    public function getListPosts(){
    	return Datatables::of(Post::query())
    	->addColumn('action', function ($post) {
                return '<a data-url = "'.asset('').'show/'.$post->id.'" data-toggle="modal" data-target="#modal-show" class="btn btn-xs btn-success btn-show"><i class="glyphicon glyphicon-eye-open"></i> Detail</a>
                <a data-url = "'.asset('').'show/'.$post->id.'" data-toggle="modal" data-target="#modal-edit" class="btn btn-xs btn-primary btn-edit"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a data-url = "'.asset('').'delete/'.$post->id.'" class="btn btn-xs btn-danger btn-delete"><i class="glyphicon glyphicon-remove"></i> Delete</a>';
            })
    	->editColumn('thumbnail',function(Post $post){
    		return '<img style="width:50px; height:30px;" src="'.$post->thumbnail.'" alt="">';
    	})
    	->editColumn('description',function(Post $post)
    	{
    		return Str::words($post->description, 10,'...');
    	})
    	->rawColumns(['thumbnail','action'])
    	->make(true);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $post=Post::create($request->all());

        return response()->json(['data'=>$post],200);
  
    }
    public function show($id)
    {
        $post = Post::find($id);
        // dd($post);
        return response()->json(['data'=>$post,'name'=> 'Vinh'],200);
    }
    public function edit($id)
    {
        // $categories = Category::get();
        // $post = Post::find($id);

        // return view('giaphiep::post.edit', ['categories' => $categories, 'post' => $post]);
    }
    public function update(Request $request, $id)
    {
        $post=Post::find($id)->update($request->all());
        return response()->json(['data'=>$post],200);

    }
    public function destroy($id)
    {   
        // PostTag::where('post_id', $id)->delete();

        Post::find($id)->delete();
        return response()->json(['data'=>'removed'],200);
    }
    public function postTrash(){
        $post = Post::onlyTrashed()->get();
    }
    public function undo($id){
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->restore();
        return response()->json([
            'error' => false,
            'message' => 'xoa thanh cong'
        ]);
        return redirect()->back();
    }
    public function hardDestroy($id){
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->forceDelete();
    }
    //reload data-table
}
