<?php

namespace App\Http\Controllers;

use App\Conversations;
use Illuminate\Http\Request;

class ConversationsController extends Controller
{
    //
    public function index(){
        return view('conversations.index',[
            'conversations'=>Conversations::all()
        ]);
    }
    public function show(Conversations $conversation){
       return view('conversations.show',[
        'conversation'=>$conversation
       ]);
    }
}
