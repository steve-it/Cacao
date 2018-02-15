<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Personnel extends Model 
{

    protected $table = 'personnel';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('Matricule', 'Nom_prenom', 'fonction', 'sexe', 'telephone1', 'telephone2', 'email', 'numerocase');

    public function Formations()
    {
        return $this->belongsToMany('Formation');
    }

}