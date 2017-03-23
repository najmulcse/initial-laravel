<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    //

    public function store(Request $request ,Card $card){

          $this->validate($request,[

              'body'=>'required|min:10'
          ]);
          $note=new Note($request->all());
          $card->addNote($note,1);


        return back();
    }

    public function edit(Note $note){

        return view('notes.edit',compact('note'));
    }

    public function update(Request $request, Note $note){

        $note->body=$request->note_body;
        $note->save();
        return back();
    }
}
