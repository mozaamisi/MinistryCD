<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrayerRequest extends Model
{
  protected $table='prayer_requests';


    protected $fillable=[
      'note',
  ];
}
