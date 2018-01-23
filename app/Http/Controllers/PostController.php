<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function test()
    {
        return "hello man";
    }

    public function index()
    {
        return view('post/index');
    }

    public function show($id)
    {
        return view('post/show');
    }

    public function create()
    {
        return view('post/create');
    }

    public function store(Request $request)
    {
        return "hello world";
    }

    public function edit($id)
    {
        return view('post/edit');
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
