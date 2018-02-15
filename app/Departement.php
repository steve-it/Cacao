<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departement extends Model 
{

    protected $table = 'departement';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('nomdepartement');

    public function Villes()
    {
        return $this->hasMany('Departement');
    }

}