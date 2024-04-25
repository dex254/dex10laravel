<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patao extends Model
{
    use HasFactory;
    protected $fillable = [
        'folder_name',
        'sender_id',
        'sender_email',
        'description',
        'nameing',
        'explain',
        'due_date',
        'users',
        'amount',
        'comun',
    ];
}
