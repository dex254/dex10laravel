<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Omba extends Model
{
    protected $fillable = [
        'sender_id',
        'sender_email',        
        'themes',
        'colors',
        'due_date',
        'usage',
    ];
}
