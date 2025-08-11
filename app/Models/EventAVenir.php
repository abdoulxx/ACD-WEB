<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventAVenir extends Model
{
    protected $table = 'event_a_venirs';
    protected $fillable = ['title', 'content', 'slug', 'image'];
}
