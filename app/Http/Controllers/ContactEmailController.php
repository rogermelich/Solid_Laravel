<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactEmailController extends Controller
{
    public function send(Request $request){
        //dd(Input::all);

        //TODO: SEND EMAIL

        //FLASH NOTIFICATION
//        $request->session()->flash(
//            'notification',
//            'All ok!'
//        );
        Flash::message('Ok!');

        //REDIRECT WELCOME
        return redirect()->route('welcome');
    }
}
