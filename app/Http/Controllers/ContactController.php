<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function index()
    {
        $get = request('search');
        if ($get) {
            $contact = Contact::where(function ($query) use ($get) {
                $query->where('name', 'like', '%' . $get . '%')
                    ->orWhere('number', 'like', '%' . $get . '%');
            })->get();
        } else {
            $contact = Contact::all();
        }
        return view('welcome', compact('contact', 'get'));
    }

    public function create()
    {
        return view('Create');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('edit', compact('contact'));
    }

    public function update(request $request)
    {
        Contact::findOrFail($request->id)->update($request->all());
        return redirect(route('index'));
    }

    public function store(Request $request)
    {
        $contacto = new Contact();
        $contacto->name = $request->name;
        $contacto->number = $request->number;
        $contacto->save();
        return redirect('/')->with('msg', 'Cadastrado com sucesso!!!');
    }
}
