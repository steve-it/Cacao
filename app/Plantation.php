<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plantation extends Model 
{

    protected $table = 'plantation';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('numplantation', 'idville', 'sousvillage', 'zoneplantation', 'nombreparcelle', 'Superficie_estime', 'Superficiecartographie', 'distance_Plantation_Village', 'Age_Plantation', 'PeriodeControle', 'Superficie_estime1', 'Nombre_Plants_distribues', 'Superficie_totale_estime', 'Cumul_Plants_distribues', 'id_planteur');

    public function Ville()
    {
        return $this->belongsTo('Ville');
    }

    public function Recoltes()
    {
        return $this->hasMany('Recolte');
    }

    public function Conduites()
    {
        return $this->hasMany('Conduite');
    }

    public function Parcelles()
    {
        return $this->hasMany('Parcelle');
    }

    public function Planteurs()
    {
        return $this->belongsTo('Planteur');
    }

    public function Installation()
    {
        return $this->hasOne('Installation');
    }

}