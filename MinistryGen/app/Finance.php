<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    //
    protected $table='finances';

    protected $fillable=[
        'date',
        'tite',
        'name',
        'offering',
    ];
    public function Donation()
    {
        return $this->belongsTo(Donation::class,'date','id');
    }
}
