<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class FamilleEquipement extends Model
{
    protected $fillable = ['nom', 'fam_equip_code'];


    public function equipements()
    {
        return $this->hasMany(\App\Equipement::class);
    }

    // public function getCreatedAtAttribute($date)
    // {
    //     return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('F-Y');
    // }
}
