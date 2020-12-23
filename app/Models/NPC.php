<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NPC extends Model
{
    use HasFactory;
    protected $table = 'npcs';
    public function campaign(){
        return $this->belongsTo(Campaign::class);
    }

    public function owner(){
        return $this->belongsTo(User::class, 'created_by');
    }
}
