<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Group;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $photos = Photo::all();
        //prende dalla tabella foto solo 10 foto in ordine casuale
        $photos = $photos->shuffle()->slice(0,10);

        $groups = Group::all();
        return view('index',compact('photos','groups'));
    }
}
