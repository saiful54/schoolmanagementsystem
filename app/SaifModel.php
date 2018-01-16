<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaifModel extends Model
{
    protected $table="createusers";
    protected $primarykey="id";
    protected $fillable=['name', 'email', 'phone', 'role'];
}
