<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoretRequest;
use App\Http\Requests\Post\PutRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use illuminate\Support\Facades\Validator;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $posts = Post::get();

       //paginaciion
        $posts = Post::paginate(3);

        //retorna la data  el posts es el referente ala variable
        return view('dashboard.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //obtener los registros dos formas
        // $categories = Category::get();

        //forma 2 recomendada por que pasa los parametros que necesitmos
        $categories = Category::pluck('id', 'title');
        $post = new Post();
        return view('dashboard/post/create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * el nombre del metodo storeRequest lo recibe de lo que creamos en request
     */
    public function store(StoretRequest $request)
    {

        Post::create($request->validated());
        return to_route('post.index');

        //validacion local 1 forma
        // $request->validate([
        //      //
        //      "title" => "required|min:5|<max:100></max:100>",
        //      "slug" => "required|min:5|max:400",
        //      "content" => "required|min:15|max:200",
        //      "category_id" => "required|integer",
        //      "description" => "required|min:10",
        //      "posted" => "required"
        //  ]);



        //SEGUNDA FORMA

        //  $validate = validator::make($request->all(),
        //  [
        //      //
        //      "title" => "required|min:5|<max:100></max:100>",
        //      "slug" => "required|min:5|max:400",
        //      "content" => "required|min:15|max:200",
        //      "category_id" => "required|integer",
        //      "description" => "required|min:10",
        //      "posted" => "required"
        //  ]);

        //  dd($validate);


        // no necesario verificar los array
        // $data = array_merge($request-> all(),['image' => '']);

        //geerar url limpia forma uno
        // $data=$request->validated();
        // $data ['slug'] =Str::slug($data['title']);
        //dd($data);


        //para verificar que datos se mostraran
        //Post::create($data);



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
        $categories = Category::pluck('id','title');

        return view('.post.edit', compact('categories','post'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update( PutRequest $request, Post $post)
    {
        //aui trabajamos con la actualizacion y traemos el store request
        $post->update($request->validated());
        return to_route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
