<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class electronics extends Model
{
    protected $table='electronics';

    protected $fillable=[
      'user_id','machine_type','model','serial','voltage','accessories','fault','status'
    ];


    public function user(){
        $this->belongsTo(User::class);
    }
}
