<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formation extends Model 
{

    protected $table = 'formation';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('Numformation', 'libelle', 'zone', 'souszone', 'Datecreation', 'TypeFormation', 'NumChampDeroulerFormation', 'theme', 'dirigepar');

    public function Planteurs()
    {
        return $this->belongsToMany('Planteur');
    }

    public function Personnels()
    {
        return $this->belongsToMany('Personnel');
    }

}