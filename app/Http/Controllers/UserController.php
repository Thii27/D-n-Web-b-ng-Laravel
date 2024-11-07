<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    const PATH_VIEW = 'admin.users.';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::query()->get();

        return view(self::PATH_VIEW . __FUNCTION__ , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__ );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view(self::PATH_VIEW . __FUNCTION__ , compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view(self::PATH_VIEW . __FUNCTION__ , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try {

            $user->delete();
            
        } catch (\Throwable $th) {
            return back()
                ->with('success', true)
                ->with('error', $th->getMessage());

        }
    }
}
