<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public function campaign(){
        return $this->belongsTo(Campaign::class);
    }

    public function owner(){
        return $this->belongsTo(User::class, 'created_by');
    }

    public function characters(){
        return $this->hasMany(Character::class, 'hometown_id');
    }

    public function nPCS(){
        return $this->belongsToMany(NPC::class, 'location_npc', 'location_id', 'npc_id');
    }
}
