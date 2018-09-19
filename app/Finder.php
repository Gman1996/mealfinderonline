<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Uuid;

class Finder extends Model
{
//    protected static function boot()
//    {
//        parent::boot();
//        self::creating(function ($model) {
//            $model->uuid = Uuid::generate()->string;
//        });
//    }
//
//    public function getRouteKey(){
//        return 'orderId';
//    }

    protected $fillable = [
        'orderId'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}