<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; // use model sang để sử dụng
use App\Category;

class HomeController extends Controller
{
    public function index(){
    		
    	// $posts  = Post::all(); // lấy tất cả bài viết bằng câu lệnh hàm all()
    		$posts = \App\Post::select('posts.*','categories.slug as category_slug')
    			->join('categories','categories.id','=','posts.category_id')
    			->simplePaginate(3);
    			// dd($posts);
                // $posts  = Post::all(); // lấy tất cả bài viết bằng câu lệnh hàm all()
            // $posts = \App\Post::select('posts.*','categories.slug as category_slug')
            //  ->join('categories','categories.id','=','posts.category_id')
            //  ->simplePaginate(1);
                // dd($posts);
        // return view('posts.index',[
        //  'posts' => $posts // dữ liệu được truyền qua view bằng biến posts
        // ]);
    	return view('posts.index',[
    		'posts' => $posts // dữ liệu được truyền qua view bằng biến posts
    	]);
    }
    public function detail($slug){
    	$post  = \App\Post::where('slug' , $slug)->firstOrFail(); // lấy tất cả bài viết bằng câu lệnh hàm all()

    	return view('posts.detail',[
    		'post' => $post // dữ liệu được truyền qua view bằng biến posts
    	]);
    }
    public function category($slug){
    	$category  = \App\Category::where('slug' , $slug)->firstOrFail(); // lấy tất cả bài viết bằng câu lệnh hàm all()
    	$posts = \App\Post::where('category_id', $category->id)->simplePaginate(2);

    	return view('posts.listCategories',[
    		'posts' => $posts // dữ liệu được truyền qua view bằng biến posts
    	]);
    }
}