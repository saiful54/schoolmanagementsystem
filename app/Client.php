<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table="client";
    protected $primarykey="id";
    protected $fillable=['name', 'fname', 'mname', 'email', 'address', 'phone', 'photo', 'education', 'gender', 'district'];
}
