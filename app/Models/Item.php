<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','categoryID',
    'userID'

    ];

    public function categories()
    {
        return $this->hasMany('App\Categorey' );
    }

    public function users()
    {
        return $this->belongsToMany('App\User' );
    }
}
