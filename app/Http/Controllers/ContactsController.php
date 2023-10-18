<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    public function index()
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
    
    public function create()
    {
        return view('Create');
    }

    public function edit($id)
    {
        $contact = Contacts::findOrFail($id);
        return view('edit', compact('contact'));
    }
    
    public function update(request $request)
    {
        Contacts::findOrFail($request->id)->update($request->all());
        return redirect(route('index'));
    }
    
    public function store(Request $request)
    {
        $contacto = new Contacts();
        $contacto->name = $request->name;
        $contacto->number = $request->number;
        $contacto->save();
        return redirect('/')->with('msg', 'Cadastrado com sucesso!!!');
    }
}
