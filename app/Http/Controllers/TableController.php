<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
   
    public function index()
    {
        $Allposts = [
            ['id'=>1,'title'=>'First Post','content'=>'This is the content of the first post.'],
            ['id'=>2,'title'=>'Second Post','content'=>'This is the content of the second post.'],
            ['id'=>3,'title'=>'Third Post','content'=>'This is the content of the third post.']
        ];
        return view('index', ['posts' => $Allposts]);
    }
    
    public function show()
    {
        $SinglePost = [
            'id' => 1,
            'title' => 'First Post',
            'content' => 'This is the content of the first post.',
            'created_at' => '2024-01-01 10:00:00',
            'created_by' => 'Ahmed'
        ];
        return view('show', ['post' => $SinglePost]);
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $_request=request();
        dd($_request->all());
        // $data=request()->all();

        return redirect()->route('posts.index');
    }

    public function edit()
    {
        return view('edit');
    }
}
