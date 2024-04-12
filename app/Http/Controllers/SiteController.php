<?php

namespace App\Http\Controllers;
use App\Models\Produtos;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class SiteController extends Controller
{
    public function index()
    {
        $produtos = Produtos::paginate(3);
        return view('site.home', compact('produtos'));
    }

    public function details($slug) {
        $produto = Produtos::where('slug', $slug)->first();
        return view('site.details', compact('produto'));
    }

    public function categoria_produtos($id_categoria){
        $produtos = Produtos::where('id_categoria', $id_categoria)->paginate(3);
        return view('site.produtos-categoria', compact('produtos'));
    }
}
