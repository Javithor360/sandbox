<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Formulario extends Controller
{
    public function saveUser(Request $request) {
        $user = new User;
        $user -> name = $request -> name;
        $user -> username = $request -> username;
        $user -> email = $request -> email;
        $user -> password = $request -> password;
        $user -> save();

        return redirect('https://youtu.be/dQw4w9WgXcQ');
    }
}
