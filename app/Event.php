<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=['user_id','cat_id','title','slug','event_image','event_details','status','start_date','end_date','post_date','expiry_date'];

    public function user(){
        $this->belongsTo(User::class,'user_id');
    }
    public function category(){
        $this->belongsTo(Category::class,'cat_id');
    }
}
