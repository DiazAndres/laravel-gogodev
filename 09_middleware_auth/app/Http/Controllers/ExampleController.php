<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function __construct()
    {
        // Puedes aplicar middleware a todas las rutas de este controlador
        // $this->middleware('example');
    }

    public function index()
    {
        return response()->json("hello world!", 200);
    }

    public function noAccess()
    {
        return response()->json("No access", 200);
    }
}
