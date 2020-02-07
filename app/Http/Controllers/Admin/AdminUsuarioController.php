<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

class AdminUsuarioController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        /* $noticias = Noticia::all();

        $argumentos = array();
        $argumentos['noticias'] = $noticias; */

        // return view('admin.usuarios.index', $argumentos);
        return view('admin.usuarios.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
