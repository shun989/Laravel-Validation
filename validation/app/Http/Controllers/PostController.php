<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postNumber()
    {
        return view('post');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
           'number' => 'required|numeric',
        ]);
        echo 'Đã xác thực thành công';

    }
}
