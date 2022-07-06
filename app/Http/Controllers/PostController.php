<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request) {
        $request->file('photo')->store('profiles');

        return redirect('profile');
    }
}
