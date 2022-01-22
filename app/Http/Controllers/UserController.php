<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getCadastro()
    {
        return view("frontend.cadastro");
    }


    public function postCadastro(Request $request)
    {
        User::insert([
            "name" => $request->nome,
            "email" => $request->email,
            "password" => "1234",
        ]);

        return json_encode(User::all());
    }
}
