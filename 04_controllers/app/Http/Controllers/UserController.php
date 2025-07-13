<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Lista todos los usuarios
        // $userList = User::all();

        // Lista los usuarios que cumplan con la condición
        // $userList = User::where('age', '>=', 25)->where('zip_code', 290909)->get();

        // Listado de usuarios que cumpla una u otra condición con orWhere
        // $userList = User::where('age', '>=', 25)->orWhere('zip_code', 290909)->get();

        // Listar usuarios de forma descendente por edad, con límite de 2
        // $userList = User::where('age', '>', 17)->orderBy('age', 'desc')->limit(2)->get();

        // limit(5,10) Esto significa que se salta los primeros 5 y muestra los siguientes 10
        // $userList = User::where('age', '>', 17)->limit(5, 10)->get();

        // Listar el primer usuario que cumpla con la condición
        // $userList = User::where('age', '>', 17)->first();

        // Listar usuario por el id
        // $userList = User::find(1);

        // $userList = User::where()->orWhere()->orderBy()->limit()->get();



        // Consultas con SQL
        $userList = DB::select(DB::raw('SELECT * FROM users'));

        return view('user.index', compact('userList'));
    }

    public function create()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => Hash::make('123456'),
            'age' => 25,
            'address' => 'Calle demostración 12',
            'zip_code' => 290909,
        ]);

        User::create([
            'name' => 'Juan Cena',
            'email' => 'jc@example.com',
            'password' => Hash::make('123456'),
            'age' => 23,
            'address' => 'Calle demo 24',
            'zip_code' => 9200389,
        ]);

        $user = new User;
        $user->name = 'Jane Doe';
        $user->email = 'example@demo.com';
        $user->password = Hash::make('123456');
        $user->age = 42;
        $user->address = 'Calle demo 31';
        $user->zip_code = 38992;
        $user->save();

        return redirect()->route('user.index');
    }
}
