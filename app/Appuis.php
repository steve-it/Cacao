<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appuis extends Model 
{

    protected $table = 'appuis';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('id_planteur', 'Annee_Financement', 'Source_Financement1', 'Source_Financement2', 'MontantFinancement', 'TypeFinancement', 'EtatRemboursementCredit', 'AnneeReceptionMateriel', 'AnneeFormation', 'SourceFinancement3', 'Modules', 'lieu', 'Machettes', 'Limes', 'Secateurs', 'Pulverisateurs', 'Scies', 'Insecticides', 'Fongicide');

    public function Planteurs()
    {
        return $this->belongsToMany('Planteur');
    }

}