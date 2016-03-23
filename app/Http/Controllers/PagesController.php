<?php

namespace App\Http\Controllers;


use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Photo;
use App\Group;


use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;


class PagesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $photos = Photo::all();
        //prende dalla tabella foto solo 10 foto in ordine casuale
        $photos = $photos->shuffle()->slice(0,30);

        $groups = Group::all();
        return view('index',compact('photos','groups'));
    }

    /**
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $input = Request::all();
        $this->sendContactMail(Contact::create($input));
        return 'success';
    }

    public function sendContactMail($contact){
        Mail::send('emails.contact', ['input' => $contact], function ($m) {
            $m->to('admin@davidecrenna.it','Davide Crenna Guitarist')->subject('Nuovo Contatto davidecrenna.it!');
//            $m->to(env('ADMIN_MAIL'),env('ADMIN_NAME'))->subject('Nuovo Contatto davidecrenna.it!');
        });
    }

    public function provamail()
    {
        Mail::raw('Text to e-mail', function ($message) {
            $message->to(env('ADMIN_MAIL'),env('ADMIN_NAME'))->subject('Nuovo Contatto davidecrenna.it!');
        });
    }

    public function phpInfo(){
        return phpinfo();
    }


}
