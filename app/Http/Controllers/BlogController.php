<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use App\Models\Blog;

class BlogController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-blog|crear-blog|editar-blog|borrar-blog')->only('index');
        $this->middleware('permission:ver-blog', ['only'=>['create','store']]);
        $this->middleware('permission:editar-blog', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-blog', ['only'=>['destroy']]);
    }

    public function index()
    {
        $blogs=Blog::paginate(5);
        return view('blogs.index',compact('blogs'));
    }


    public function create()
    {
        return view('blogs.crear');
    }


    public function store(Request $request)
    {
        request()->validate([
            'titulo'=>'required',
            'contenido'=>'required',
        ]);
        Blog::create($request->all());
        return redirect()->route('blogs.index');
    }

    public function show($id)
    {
        //
    }


    public function edit(Blog $blog)
    {
        return view('blogs.editar',compact('blog'));

    }

    public function update(Request $request, Blog $blog)
    {
        request()->validate([
            'titulo'=>'required',
            'contenido'=>'required',
        ]);
        $blog ->update($request->all());
        return redirect()->route('blogs.index');

    }


    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index');
    }
}
