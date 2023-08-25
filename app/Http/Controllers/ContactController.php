<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;



class ContactController extends Controller
{
    public function submit(ContactRequest $req){
        /*dd($req->input('subject')); чтобы вытащить тему
        $validation = $req->validate([
            'subject' => 'required|min:5|max:50',
            'message' => 'required'
        
        ]);*/

        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Сообщение было добавленно');
    }

    /*public function allData(){
        dd(Contact::all());
    }*/
    public function allData(){
        $contact = new Contact;
        //return view('messages', ['data'=> $contact->orderBy('id', 'asc')->skip(1)->take(1)->get()]);
        return view('messages',['data'=>$contact->all()]);
        //return view('messages', ['data' => $contact->where('subject', '=','Hetso')->get()]);
    }

    public function showOneMessage($id){
        $contact = new Contact;
        return view('one-messages',['data'=>$contact->find($id)]);
    }
    public function updateMessage($id){
        $contact = new Contact;
        return view ('update-message',['data'=>$contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req){
        /*dd($req->input('subject')); чтобы вытащить тему
        $validation = $req->validate([
            'subject' => 'required|min:5|max:50',
            'message' => 'required'
        
        ]);*/

        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение было обновленно');
    }

    public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение было удалено');
    }
}
