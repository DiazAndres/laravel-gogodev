<?php

namespace App\Http\Controllers;

use App\Http\Requests\InfoRequest;
use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InfoController extends Controller
{
    public function index()
    {
        $infos = Info::get();
        return view('index', compact('infos'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(InfoRequest $request)
    {
        $fileName = time() . '.' . $request->file->extension();
        // $request->file->move(public_path('images'), $fileName);

        // Para guardar la img en el storage
        $request->file->storeAs('images', $fileName, 'public');
        // Para que se pueda acceder desde la web, hay que hacer un enlace simbólico
        // php artisan storage:link
        // Para guardar la img en el storage y que se pueda acceder desde la web
        // Para que se guarde en la carpeta public/images, se debe especificar el disco 'public' en el método storeAs

        // Se puede guardar con la clase Storag
        // Storage::disk('local')->put()

        $info = new Info();
        $info->name = $request->name;
        $info->file_uri = $fileName;
        $info->save();

        return redirect()->route('index');
        // Para descargar el archivo
        // return Storage::download('public/images/' . $fileName, 'nombre_archivo.ext');

        // Saber la url del archivo
        // $url = Storage::url('images/' . $fileName);

        // Url temporal
        // $temporaryUrl = Storage::temporaryUrl('images/' . $fileName, now()->addMinutes(5));
        // return response()->json(['url' => $temporaryUrl]);
    }
}
