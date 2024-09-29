<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoretRequest;
use App\Http\Requests\Category\PutRequest;
use App\Models\Category;


class CategoryController extends Controller
{

    public function index()
    {
        //
        // $posts = Category::get();

        //paginaciion
        $categories = Category::paginate(3);

        //retorna la data  el posts es el referente ala variable
        return view('dashboard.category.index', compact('categories'));
    }


    public function create()
    {

        $category = new Category();
        return view('dashboard.category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     * el nombre del metodo storeRequest lo recibe de lo que creamos en request
     */
    public function store(StoretRequest $request)
    {

        Category::create($request->validated());
        return to_route('category.index');

    }


    public function show(Category $category)
    {
        //vista de detalle
        return view('dashboard/category/show', ['category' => $category]);
    }


    public function edit(Category $post)
    {


        return view('dashboard.category.edit', compact('category'));
    }


    public function update(PutRequest $request, Category $category)
    {

        //aui trabajamos con la actualizacion y traemos el store request
        $category->update($request->validated());
        return to_route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //eliminacion
        //nota hace la eliminacion a nivel logico  no fisico
        $category->delete();
        return to_route('category.index');
    }
}
