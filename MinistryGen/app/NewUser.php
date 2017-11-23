<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewUser extends Model
{
    protected $table='new_user';

    protected $fillable=
        [
            'firstName',
            'surname',
            'cellphone',
            'email',
            'Address',
            'gender',
            'dob',

        ];
    public function PrayerRequest()
    {
        return $this->hasOne(PrayerRequest::class);
    }
    public function Finance()
    {
        return $this->hasMany(Finance::class);
    }
    public function Donation()
    {
        return $this->hasOne(Donation::class);
    }

}
