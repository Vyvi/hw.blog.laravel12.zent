<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Post;
use App\Category;
use \Illuminate\Support\Str;

class CateController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guest');
    }
    public function index(){
    	return view('admins.cateList');
    }
    public function getListCates(){
    	return Datatables::of(Category::query())
    	->addColumn('action', function ($category) {
                return '<a data-url = "'.asset('').'cateshow/'.$category->id.'" data-toggle="modal" data-target="#modal-show-cate" class="btn btn-xs btn-success btn-show-cate"><i class="glyphicon glyphicon-eye-open"></i> Detail</a>
                <a data-url = "'.asset('').'cateshow/'.$category->id.'" data-toggle="modal" data-target="#modal-edit-cate" class="btn btn-xs btn-primary btn-edit-cate"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a data-url = "'.asset('').'catedelete/'.$category->id.'" class="btn btn-xs btn-danger btn-delete-cate"><i class="glyphicon glyphicon-remove"></i> Delete</a>';
            })
    	->editColumn('thumbnail',function(Category $category){
    		return '<img style="width:50px; height:30px;" src="'.$category->thumbnail.'" alt="">';
    	})
    	->editColumn('description',function(Category $category)
    	{
    		return Str::words($category->description, 10,'...');
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
        $category=Category::create($request->all());

        return response()->json(['data'=>$category],200);
  
    }
    public function show($id)
    {
        $category = Category::find($id);
        // dd($post);
        return response()->json(['data'=>$category,'name'=> 'Vinh'],200);
    }
    public function edit($id)
    {
        // $categories = Category::get();
        // $post = Post::find($id);

        // return view('giaphiep::post.edit', ['categories' => $categories, 'post' => $post]);
    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id)->update($request->all());
        return response()->json(['data'=>$category],200);

    }
    public function destroy($id)
    {   
        // $cate  = \App\Category::find($id)->posts;
        // $cate = \App\Category::find($id)->posts()->where('category_id', '$id')->first();
        // dd($cate);
        Post::where('category_id', $id)->delete();
         Category::find($id)->delete();
        return response()->json(['data'=>'removed'],200);
    }
    public function postTrash(){
        $category = Category::onlyTrashed()->get();
    }
    public function undo($id){
        $category = Category::withTrashed()->where('id',$id)->first();
        $category->restore();
        return response()->json([
            'error' => false,
            'message' => 'xoa thanh cong'
        ]);
        return redirect()->back();
    }
    public function hardDestroy($id){
        $category = Category::withTrashed()->where('id',$id)->first();
        $category->forceDelete();
    }
}
