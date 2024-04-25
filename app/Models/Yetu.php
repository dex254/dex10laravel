<?php

// app/Models/Yetu.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yetu extends Model
{
    use HasFactory;

    protected $fillable = ['sender_id', 'sender_email', 'image_name','description','nameing','links','purpose','explain','due_date','users','amount','comun'];

}

