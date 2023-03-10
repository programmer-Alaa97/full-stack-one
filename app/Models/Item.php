<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','photo','categoryID',
    'userID'

    ];


    public function getphotoAttribute($photo)
    {
        return asset($photo);
    }


    public function categories()
    {
        return $this->hasMany('App\Categorey' );
    }

    public function users()
    {
        return $this->belongsToMany('App\User' );
    }
}
