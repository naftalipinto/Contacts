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

    public function create()
    {
        return view('person.create');
    }

    public function edit($id)
    {
        $person = Person::findOrFail($id);
        return view('person.edit', compact('person'));
    }

    public function update(request $request)
    {
        Person::findOrFail($request->id)->update($request->all());
        return redirect(route('index'));
    }

}
