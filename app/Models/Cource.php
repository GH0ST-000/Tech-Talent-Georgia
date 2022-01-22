<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cource extends Model
{
    use HasFactory;
    protected $fillable=['id','user_id','company_logo','short_description','company_name','tags','price',
        'long_description','fields','session','week','category','duration'];
}
