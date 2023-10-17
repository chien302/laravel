<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $contact;
    public function __construct()
    {
        $this->contact = new Contact();
    }
    public function index()
    {
        $response['contacts'] = $this->contact->all();
        return view('pages.index')->with($response);
    }

    public function store(Request $request)
    {

        $this->contact->create($request->all());
        return redirect()->back();
    }

    public function edit(string $id)
    {
        $response['contact'] = $this->contact->find($id);
        return view('pages.edit')->with($response);
    }
    public function update(Request $request, string $id)
    {
        $contact = $this->contact->find($id);
        $contact->update(array_merge($contact->toArray(), $request->toArray()));
        return redirect('contact');
    }
    public function destroy(string $id)
    {
        $contact = $this->contact->find($id);
        $contact->delete();
        return redirect('contact');
    }
}
