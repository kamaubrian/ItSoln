<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $table='transactions';

    protected $fillable = [
      'user_id','title','machine_type','message','price','priority'

    ];


}
