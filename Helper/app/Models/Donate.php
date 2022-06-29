<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $fillable = ['name',
     'email',
     'number',
     'address',
     'tools'
    ];

    public function setTools($value)
    {
        $this->attributes['tools']=json_encode($value);
    }

    public function getTools($value)
    {
        $this->attributes['tools']=json_decode($value);
    }

}
