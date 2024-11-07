<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    const PATH_VIEW = 'admin.categories.';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::query()->latest()->paginate(5);

        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view(self::PATH_VIEW . __FUNCTION__);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=> 'required',
        ]);
    
        try {
            // Lấy tất cả dữ liệu từ request
            $data = $request->all();
    
            // Tạo mới
            Category::query()->create($data);
    
            return redirect()->route('categories.index')->with('success', 'Thêm mới thành công');

        } catch (\Throwable $th) {

            dd($th);
            return back()->with('error', $th->getMessage());

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // Tìm category và cập nhật
        $category = Category::findOrFail($category);
        $category->name = $request->input('name');
        $category->save();

        // Trả về response JSON sau khi update
        return response()->json([
            'id' => $category->id,
            'name' => $category->name,
            'created_at' => $category->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $category->updated_at->format('Y-m-d H:i:s'),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {

            $category->delete();

            return redirect()->route('categories.index')->with('success', 'Đã xáo thành công bản ghi');

        } catch (\Throwable $th) {
            return back()
                ->with('success', true)
                ->with('error', $th->getMessage());

        }
    }

}
