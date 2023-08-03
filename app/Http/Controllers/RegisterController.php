<?php

namespace App\Http\Controllers;
use App\Models\Info;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
class RegisterController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'password'=>'required',
        ]);

        info::create($request->all());

        return redirect('\login');
    }
}
