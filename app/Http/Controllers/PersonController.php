<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function store(Request $request)
    {
        $person = new Person();
        $person->name = $request->name;
        $person->save();
        return redirect('/')->with('msg', 'Cadastrado com sucesso!!!');
    }
}
