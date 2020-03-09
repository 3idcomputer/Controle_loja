<?php


namespace App\Http\Controllers;


class ProdutoController extends Controller
{
    public function lista()
    {
        return view( 'produtos');
    }


    public function home()
    {
        return view('home');
    }
}




