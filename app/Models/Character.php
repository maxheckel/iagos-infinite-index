<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    public function campaign(){
        return $this->belongsTo(Campaign::class);
    }

    public function owner(){
        return $this->belongsTo(User::class, 'created_by');
    }

    public function resistances(){
        return $this->belongsToMany(ResistanceVulnerability::class, 'character_resistances_vulnerabilities')->where('type', ResistanceVulnerability::RESISTANCE);
    }

    public function vulnerabilities(){
        return $this->belongsToMany(ResistanceVulnerability::class, 'character_resistances_vulnerabilities')->where('type', ResistanceVulnerability::VULNERABILITY);
    }

    public function resistanceVulnerabilities(){
        return $this->belongsToMany(ResistanceVulnerability::class, 'character_resistances_vulnerabilities');
    }

    public function allies(){
        return $this->belongsToMany(NPC::class, 'character_npc', 'character_id', 'npc_id')->wherePivot('type', 'ally');
    }

    public function enemies(){
        return $this->belongsToMany(NPC::class, 'character_npc', 'character_id', 'npc_id')->wherePivot('type', 'enemy');
    }

    public function items(){
        return $this->belongsToMany(Item::class);
    }

    public function fears(){
        return $this->belongsToMany(Fear::class);
    }

    public function factions(){
        return $this->belongsToMany(Faction::class);
    }

    public function nPCS(){
        return $this->belongsToMany(NPC::class, 'character_npc', 'character_id', 'npc_id');
    }
    public function hometown(){
        return $this->hasOne(Location::class, 'hometown_id');
    }
}
