<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function store(Request $request)
    {
        $person = new Owner();
        $person->name = $request->name;
        $person->save();
        return redirect('/')->with('msg', 'Cadastrado com sucesso!!!');
    }

    public function create()
    {
        return view('person.create');
    }

    public function edit($id)
    {
        $person = Owner::findOrFail($id);
        return view('person.edit', compact('person'));
    }

    public function update(request $request)
    {
        Owner::findOrFail($request->id)->update($request->all());
        return redirect(route('index'));
    }

}
