<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = DB::select ('select * from produtos');

        return view( 'produtos')->withProdutos($produtos);
    }

    public function mostra()
    {
        return view('detalhe');
    }


    public function home()
    {
        return view('home');
    }
}




