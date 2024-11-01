<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    // Menentukan kolom yang dapat diisi massal
    protected $fillable = ['user_id', 'event_id'];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan model Event
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
