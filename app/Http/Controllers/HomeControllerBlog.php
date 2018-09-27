<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Post; // use model sang để sử dụng
use App\Http\Requests\PostRequest;

class HomeControllerBlog extends Controller
{
    public function index(){

        $posts  = Post::all(); // lấy tất cả bài viết bằng câu lệnh hàm all()
        $tags  = \App\Tag::all();
        
         $posts = \App\Post::select('posts.*','categories.slug as category_slug')
             ->join('categories','categories.id','=','posts.category_id')
             ->simplePaginate(4);
             // dd($posts);
        return view('posts.index',[
         'posts' => $posts,
         'tags'=> $tags // dữ liệu được truyền qua view bằng biến posts
        ]);
        // return view('welcome');

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
    public function search(Request $request){
        
        $posts = \App\Post::where('title','like','%'.$request->name.'%')->with('category')->simplePaginate(4);
        $posts->appends(['name' => $request->name])->links();
        // $posts->withPath('search?name=test');
        
        // dd($request->path());
        
        return view('posts.index',['name'=>$request->name,'posts'=>$posts]);
    }
    public function tag($slug){
        $posts = \App\Tag::where('slug',$slug)->firstOrFail()->posts()->paginate(2);


        return view('posts.listTags',[
            'posts' => $posts,
             // dữ liệu được truyền qua view bằng biến posts
        ]);
    }
    public function store(PostRequest $request)
    {
            return $request->all();
        // $validator = Validator::make($request->all());
        //     [
        //         'title' => 'required|min:5|max:255',
        //         'description' => 'required|min:5',
        //         'content' => 'required|min:5'

        //     ],

        //     [
        //         'required' => ':attribute Không được để trống',
        //         'min' => ':attribute Không được nhỏ hơn :min',
        //         'max' => ':attribute Không được lớn hơn :max'
        //     ],

        //     [
        //         'title' => 'Tiêu đề',
        //         'description' => 'Mô tả',
        //         'content' => 'Nội dung'
        //     ]

        // );
        // if ($validator->fails()) {
     //        return redirect()->back()
     //                    ->withErrors($validator)
     //                    ->withInput();
     //    }

    }
    
}
