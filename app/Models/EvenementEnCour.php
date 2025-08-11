<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvenementEnCour extends Model
{
    protected $table = 'evenement_en_cours';
    protected $fillable = ['title', 'content', 'slug', 'image'];
}
