<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model 
{

    protected $table = 'ville';
    public $timestamps = true;
    protected $fillable = array('nomville', 'id_departement');

    public function Departements()
    {
        return $this->belongsTo('Departement');
    }

    public function Plantations()
    {
        return $this->hasMany('Plantation');
    }

}