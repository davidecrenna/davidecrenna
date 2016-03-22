<?php

namespace App\Http\Controllers;


use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Photo;
use App\Group;


use Mail;
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
        Contact::create($input);

        return 'success';

    }

}
