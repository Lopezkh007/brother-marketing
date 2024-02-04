<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "summary",
        "description",
        "thumbnail",
        "ordering",
        "is_main_event",
        "status",
    ];
}
