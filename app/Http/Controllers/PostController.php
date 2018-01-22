<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('post/index');
    }

    public function show($id)
    {
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA'
        ]);
    }

    public function create()
    {
        return "hello world";
    }

    public function store(Request $request)
    {
        return "hello world";
    }


    public function edit($id)
    {
        return "hello world";
    }


    public function update(Request $request, $id)
    {
        return "hello world";
    }

    public function delete($id)
    {
        return "hello world";
    }
}
