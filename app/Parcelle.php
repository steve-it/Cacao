<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcelle extends Model 
{

    protected $table = 'parcelle';
    public $timestamps = true;
    protected $fillable = array('NumParcelle', 'ageparcelle', 'Superficie_estime', 'Superficie_cartographie', 'Date_culture', 'id_plantation');

    public function Plantations()
    {
        return $this->belongsTo('Plantation');
    }

}