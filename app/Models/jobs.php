<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    use HasFactory;
    protected $table='jobs';
    protected $fillable=['id','user_id','company_logo','short_description','company_name','tags','salary',
        'long_description','fields','location','seniority','category','commitment'];
     public function users(){
        return $this->belongsTo(User::class);
    }
}

