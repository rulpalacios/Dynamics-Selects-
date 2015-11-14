<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    protected $table = 'towns';

    protected $fillable = ['name','state_id'];


    public static function towns($id){
    	return Town::where('state_id','=',$id)
    	->get();
    }
}
