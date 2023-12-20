<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'The message has been sent');
    }

    public function getAllData()
    {
        $contact = new Contact;
        return view('messages', ['data' => $contact->orderBy('id', 'desc')->get()]);
    }

    public function getData($id)
    {
        $contact = new Contact;
        return view('message', ['data' => $contact->find($id)]);
    }

    public function updateData($id)
    {
        $contact = new Contact;
        return view('update', ['data' => $contact->find($id)]);
    }

    public function edit($id, ContactRequest $request)
    {
        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('contact-message', $id)->with('success', 'The message has been updated');
    }

    public function delete($id)
    {
        Contact::find($id)->delete();
        
        return redirect()->route('contact-data')->with('success', 'The message has been deleted');
    }
}
