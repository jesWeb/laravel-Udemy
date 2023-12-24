<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoretRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //obtener los registros dos formas
        // $categories = Category::get();
        //recomendada
        $categories = Category::pluck('id', 'title');

        echo view('dashboard.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretRequest $request)
    {

        //validacion local
    //    $validate = $request->validate([
    //         //
    //         "title" => "required|min:5|max:100",
    //         "slug" => "required|min:5|max:400",
    //         "content" => "required|min:15|max:200",
    //         "category_id" => "required|integer",
    //         "description" => "required|min:10",
    //         "posted" => "required"
    //     ]);

    //     dd($validate);



        //verificar los array
        $data = array_merge($request-> all(),['image' => '']);

        //geerar url limpia forma uno
        // $data=$request->validated();
        // $data ['slug'] =Str::slug($data['title']);
         //dd($data);
        //para verificar que datos se mostraran
         Post::create($data);
        // Post::create($request->validated());

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
