<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortLink extends Model  
{  
    /**  
     * It is used to display the mass assignable attributes.  
     *  
     * It is used to show @var array  
     */  
    protected $fillable = [
        'code', 'link'  
    ];  
}  
