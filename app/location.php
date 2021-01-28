<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Location extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'locationName',
        'address',
        'city',
        'state',
        'country',
        'currency',
        'postalCode',
        'GPdatabase',
        'VAT',
        'VATRate'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function materialLocations()
    {
        return $this->belongsTo(MaterialLocation::class);
    }

}
