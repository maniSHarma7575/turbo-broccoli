<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;

class ConversationBestReplyController extends Controller
{
    public function store(Reply $reply){
        $this->authorize('update',$reply->conversation);
        $reply->conversation->best_reply_id=$reply->id;
        $reply->conversation()->save();
        return back();
    }
}
