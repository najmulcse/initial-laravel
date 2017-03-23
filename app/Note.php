<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
    protected $fillable=['body'];

    public function card(){

       return $this->belongsTo('App\Card');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function by(User $user){
       return $this->user_id=$user->id;
    }

}
