<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //
    public function company(){
        return view('company');
    }
    public function service(){
        return view('service');
    }
    public function recruit(){
        return view('recruit');
    }
    public function contact(){
        return view('contact');
    }
    public function question(Request $request){
        $your_contact = $request->your_contact;
        $company_name = $request->company_name;
        $your_name = $request->your_name;
        $your_phonetic = $request->your_phonetic;
        $your_email = $request->your_email;
        $your_message = $request->your_message;
//        Mail::send([], [], function (Message $message) use ($your_email, $your_message) {
//            $message->to($your_email)
//                ->subject('株式会社NEXT')
//                ->from('info@nextitm.jp')
//                ->setBody($your_message, 'text/html');
//        });

    }

}
