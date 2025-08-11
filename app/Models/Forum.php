<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable; 

class Forum extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['nom', 'email', 'fonction', 'statut', 'numero_whatsapp', 'entreprise'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
