<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'pIva',
        'logo',
        'shipping',
        'shippingFree',
        'slug'
    ];

    // relazione ristorante - user
    public function users() {
        return $this->belongsTo('App\User');
    }

}
