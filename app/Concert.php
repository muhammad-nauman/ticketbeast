<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'date',
        'ticket_price',
        'venue',
        'venue_address',
        'city',
        'state',
        'zip',
        'additional_information',
    ];
}
