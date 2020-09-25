<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilleEquipement extends Model
{
    protected $fillable = ['nom', 'fam_equip_code'];


    public function equipements()
    {
        return $this->hasMany(\App\Equipement::class);
    }
}
