<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $table = 'campaigns';

    public function owner(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function characters(){
        return $this->hasMany(Character::class);
    }

    public function items(){
        return $this->hasMany(Item::class);
    }

    public function gameSessions(){
        return $this->hasMany(GameSession::class);
    }

    public function fears(){
        return $this->hasMany(Fear::class);
    }

    public function locations(){
        return $this->hasMany(Location::class);
    }

    public function resistances(){
        return $this->hasMany(ResistanceVulnerability::class)->where('type', ResistanceVulnerability::RESISTANCE);
    }

    public function vulnerabilities(){
        return $this->hasMany(ResistanceVulnerability::class)->where('type', ResistanceVulnerability::VULNERABILITY);
    }

}
