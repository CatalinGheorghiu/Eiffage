<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    protected $fillable = ['designation', 'equip_code', "famille_equipement_id"];

    public function familleEquipement()
    {
        return $this->belongsTo(\App\FamilleEquipement::class);
    }
}
