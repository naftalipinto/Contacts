<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    function index()
    {
        $get = request('search');
        if ($get) {
            $contact = Contacts::where(function ($query) use ($get) {
                $query->where('name', 'like', '%' . $get . '%')
                      ->orWhere('number', 'like', '%' . $get . '%');
            })->get();
            
        } else {
            $contact = Contacts::all();
        }
        return view('welcome', compact('contact', 'get'));
    }
    function create()
    {
        return view('Create');
    }
    function edit($id)
    {
        $contact = Contacts::findOrFail($id);
        return view('edit', compact('contact'));
    }
    function update(request $request)
    {
        Contacts::findOrFail($request->id)->update($request->all());
        return redirect(route('index'));
    }
    function store(Request $request)
    {
        $contacto = new Contacts();
        $contacto->name = $request->nome;
        $contacto->number = $request->numero;
        $contacto->save();
        return redirect('/')->with('msg', 'Cadastrado com sucesso!!!');
    }
}
