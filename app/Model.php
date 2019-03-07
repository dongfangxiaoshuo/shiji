<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BasicModel;

class Model extends BasicModel
{
    //
//    protected $fillable = [
//        'title', 'content',
//    ];
    protected $guarded = [];
}
