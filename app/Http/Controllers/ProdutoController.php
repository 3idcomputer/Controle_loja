<?php


namespace App\Http\Controllers;


class ProdutoController extends Controller
{
    public function lista()
    {
        return '<h1>Lista de Produtos</h1>';
    }


    public function home()
    {
        return view('home');
    }
}




