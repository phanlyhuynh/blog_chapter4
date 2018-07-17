<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Ticket extends Model
{
    //
    protected $table = 'tickets';
    protected $fillable = ['title','content','slug','status','user_id'];

    public function comments()
    {
        return $this->morphMany('App\Comment', 'post');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }



}
