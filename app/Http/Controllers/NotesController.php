<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

use App\Http\Requests;

class NotesController extends Controller
{
    //

    public function store(Request $requests , $id){

        $note=new Note;
        $note->card_id=$id;
        $note->body=$requests->note_body;
        $note->save();
        return back();
    }
}
