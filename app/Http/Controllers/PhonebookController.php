<?php

namespace App\Http\Controllers;

use App\Phonebook;
use Illuminate\Http\Request;
use App\Http\Requests\PhonebookRequest;

class PhonebookController extends Controller
{

    public function index()
    {
        return view('phonebook');
    }

    public function getData(){
        return Phonebook::orderBy('name', 'asc')->get();
    }

    public function create()
    {
        //
    }

    public function store(PhonebookRequest $request)
    {
        $pb = new Phonebook;
        $pb->name = $request->name;
        $pb->phone = $request->phone;
        $pb->email = $request->email;
        $pb->save();
    }

    public function show(Phonebook $phonebook)
    {
        //
    }

    public function edit(Phonebook $phonebook)
    {
        //
    }

    public function update(PhonebookRequest $request)
    {
        $pb = Phonebook::find($request->id);
        $pb->name = $request->name;
        $pb->phone = $request->phone;
        $pb->email = $request->email;
        $pb->save();
        //return $pb->all();
    }

    public function destroy(Phonebook $phonebook)
    {
        //
    }
}
