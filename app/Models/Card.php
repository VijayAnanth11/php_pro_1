<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = 'cards';
    protected $primaryKey = 'id';
    protected $fillable = ['pid', 'proname', 'proprice','image','qty'];

}
