<?php

namespace App\Http\Controllers;
use \App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        // dd('Hola desde UserController@index');
        // $usuarios = User::where("age", "!=", "25")->get();
        // $usuarios = User::where("name", "LIKE", "j%")->get();
        $usuarios = User::where("age", ">", 25)->where("zipCode", "!=", "28080")->get();
        return view("users.index", ["usuarios" => $usuarios]);
    }

    public function create() {
        $usuario = new User();
        $usuario->name = 'María García';
        $usuario->email = 'mgarcia@example.com';
        $usuario->password = Hash::make('123456');
        $usuario->age = 30;
        $usuario->address = 'Calle Mayor 1';
        $usuario->zipCode = 28080;
        $usuario->save();

        User::create([
            'name' => 'Juan Pérez',
            'email' => 'jperez@example.com',
            'password' => Hash::make('password'),
            'age' => 25,
            'address' => 'Calle Falsa 123',
            'zipCode' => 28080
        ]);

        User::create([
            'name' => 'José Flores',
            'email' => 'jflores@example.com',
            'password' => Hash::make('flores'),
            'age' => 25,
            'address' => 'Calle Falsa 123',
            'zipCode' => 28080
        ]);

        // redirigimos a la vista de listado de usuarios
        return redirect()->route('user.index');
    }
}