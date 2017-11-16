<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $guarded = array();

    public function comments(){

        return $this->hasMany(Comment::class);
        // when you have a relation ship b/t two
        // if want to do the join, connect

    }

    public function addComment($body){

        $this->comments()->Create(compact('body'));
    }

/*
    public function scopeIncomplete($query)   //Task::incomplete()
    {
        return $query->where('completed',0);
    }
*/
}
