<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'admin.articles.';
    public function index()
    {
        $data = Article::with('user', 'category')->latest()->paginate(perPage: 7);


        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all(); // Lấy danh mục
        $users = User::all();          // Lấy người dùng

        return view(self::PATH_VIEW . __FUNCTION__, compact('categories','users' ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate inputs

        // dd($request->all());
        $data = $request->validate([
            'title'=> 'required',
            'content'=> 'required',
            'summary'=> 'required',
            'status'=> 'required',
            'published_at'=> 'nullable',
            'user_id'=> 'required',
            'category_id'=> 'required',
            'image' => 'nullable|image|max:2048'
        ]);
    
        try {
    
            // Xử lý ảnh nếu có
            if ($request->hasFile('image')) {

                $data['image'] = Storage::put('articles', $request->file('image'));

            }
    
            // Tạo bài viết
            Article::query()->create($data);
    
            return redirect()->route('articles.index')->with('success', true);

        } catch (\Throwable $th) {
            // dd($th)
            // Xóa ảnh nếu có lỗi xảy ra
            if (!empty($data['image']) && Storage::exists($data['image'])) {
                Storage::delete($data['image']);
            }
    
            return back()->with('error', $th->getMessage());
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $categories = Category::all(); // Lấy danh mục
        $users = User::all(); 
        return view(self::PATH_VIEW . __FUNCTION__, compact('categories','users' , 'article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $data = $request->validate([
            'title'=> 'required',
            'content'=> 'required',
            'summary'=> 'required',
            'status'=> 'required',
            'published_at'=> 'nullable',
            'user_id'=> 'required',
            'category_id'=> 'required',
            'image' => 'nullable|image|max:2048'
        ]);
        
        try {

            if ($request->hasFile('image')) {
                $data['image'] = Storage::put('articles', $request->file('image'));
            }

            $currentimage = $article->image;

            Article::query()->update($data);

            if (
                $request->hasFile('image')
                && !empty($currentimage)
                && Storage::exists($currentimage)
            ) {
                Storage::delete($currentimage);
            }

            return back()->with('success', true);

        } catch (\Throwable $th) {

            dd($th);

            if (!empty($data['image']) && Storage::exists($data['image'])) {
                Storage::delete($data['image']);
            }

            return back()
                ->with('success', true)
                ->with('error', $th->getMessage());

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        try {

            $article->delete();

            return redirect()->route('articles.index')->with('success', 'Đã xoa thành công bản ghi');

        } catch (\Throwable $th) {
            return back()
                ->with('success', true)
                ->with('error', $th->getMessage());

        }
    }


}
