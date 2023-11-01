<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Person;

class ContactController extends Controller
{

    public function index()
    {
        $get = request('search');
        if ($get) {
            $contact = Contact::where('number', 'like', '%' . $get . '%')->get();
        } else {
            $contact = Contact::with('person')->get();
        }
        return view('welcome', compact('contact', 'get'));
    }

    public function create()
    {
        $person = person::all();
        return view('contact.create', compact('person'));
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contact.edit', compact('contact'));
    }

    public function update(request $request)
    {
        Contact::findOrFail($request->id)->update($request->all());
        return redirect(route('index'));
    }

    public function store(Request $request)
    {
        $contacto = new Contact();
        $contacto->number = $request->number;
        $contacto->people_id = $request->people_id;
        $contacto->save();
        return redirect('/')->with('msg', 'Cadastrado com sucesso!!!');
    }
}
