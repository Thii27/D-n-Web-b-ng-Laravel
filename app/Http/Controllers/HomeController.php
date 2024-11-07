<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Lấy tất cả danh mục
        $categories = Category::all();


        // Lấy tất cả bài viết hoặc có thể paginate
        $postsByCategory = [];

        foreach ($categories as $category) {

            // Lấy bài viết của từng danh mục 
            $articles = Article::where('category_id', $category->id)->limit(6)->get();
            if ($articles->isNotEmpty()) {
                // Chia bài viết thành các phần
                $firstArticle = $articles->first();               
                $nextTwoArticles = $articles->skip(1)->take(2);   
                $remainingArticles = $articles->skip(3)->take(3); 

                // Lưu trữ các phần bài viết vào mảng kết quả
                $postsByCategory[$category->id] = [
                    'firstArticle' => $firstArticle,
                    'nextTwoArticles' => $nextTwoArticles,
                    'remainingArticles' => $remainingArticles
                ];
                // dd($postsByCategory);
            }
        }



        $sliders = Article::limit(3)->get();

        // dd($categories, $postsByCategory);

        return view('client.index', compact('categories', 'postsByCategory', 'sliders'));
    }

    public function showAllArticle($id)
    {
        $category = Category::find($id);

        $articles = Article::where('category_id', $category->id)->paginate(6);

        return view('client.article', compact('articles', 'category'));
    }

    public function showArticle($id){

        $category = Category::find($id);

        $article = Article::where('id', $id)->first();

        if (!$article) {
            // dd($article);
            return back()->with('error', 'không tồn tại bài viết');
        }

        return view('client.single-article', compact('article', 'category'));

    }

}
