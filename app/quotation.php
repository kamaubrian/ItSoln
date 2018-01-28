<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quotation extends Model
{
    protected $table='quotations';

    protected $fillable = [
        'client_id','quotation_number','client_name',
    ];

}
