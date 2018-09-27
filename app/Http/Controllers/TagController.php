<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Post;
use App\Category;
use App\Tag;
use \Illuminate\Support\Str;

class TagController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guest');
    }
    public function index(){
        return view('admins.tagList');
    }
    public function getListTaggs(){
        return Datatables::of(Tag::query())
        ->addColumn('action', function ($tag) {
                return '<a data-url = "'.asset('').'taggshow/'.$tag->id.'" data-toggle="modal" data-target="#modal-show-tagg" class="btn btn-xs btn-success btn-show-tagg"><i class="glyphicon glyphicon-eye-open"></i> Detail</a>
                <a data-url = "'.asset('').'taggshow/'.$tag->id.'" data-toggle="modal" data-target="#modal-edit-tagg" class="btn btn-xs btn-primary btn-edit-tagg"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a data-url = "'.asset('').'taggdelete/'.$tag->id.'" class="btn btn-xs btn-danger btn-delete-tagg"><i class="glyphicon glyphicon-remove"></i> Delete</a>';
            })
        
        ->make(true);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $tag=Tag::create($request->all());

        return response()->json(['data'=>$tag],200);
  
    }
    public function show($id)
    {
        $tag = Tag::find($id);
        // dd($post);
        return response()->json(['data'=>$tag,'name'=> 'Vinh'],200);
    }
    public function edit($id)
    {
        // $categories = Category::get();
        // $post = Post::find($id);

        // return view('giaphiep::post.edit', ['categories' => $categories, 'post' => $post]);
    }
    public function update(Request $request, $id)
    {
        $tag = Tag::find($id)->update($request->all());
        return response()->json(['data'=>$tag],200);

    }
    public function destroy($id)
    {
        PostTag::where('category_id', $id)->delete();
         Tag::find($id)->delete();
        return response()->json(['data'=>'removed'],200);
    }
    public function postTrash(){
        $tag = Tag::onlyTrashed()->get();
    }
    public function undo($id){
        $tag = Tag::withTrashed()->where('id',$id)->first();
        $tag->restore();
        return response()->json([
            'error' => false,
            'message' => 'xoa thanh cong'
        ]);
        return redirect()->back();
    }
    public function hardDestroy($id){
        $tag = Tag::withTrashed()->where('id',$id)->first();
        $tag->forceDelete();
    }
}
