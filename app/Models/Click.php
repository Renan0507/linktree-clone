<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Click extends Model
{
    protected $fillable = ['id_page', 'click_date'];
    
    public $timestamps = false;
}
