<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "subtitle",
        "des",
        "label",
        "navigate_to",
        "image",
        "ordering",
        "status",
        "redirect_new_tap"
    ];
}
