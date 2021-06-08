<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_detail extends Model
{
    protected $fillable=[ 'name','email', 'mobile', 'description'];
}
