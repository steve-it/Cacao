<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recolte extends Model 
{

    protected $table = 'recolte';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('id_plantation', 'daterecolte', 'Dateecabossage', 'Dispositiffermentation', 'Nombrejoursfermentation', 'Nombrebrassages', 'Dispositifsechage', 'Nombrejourssechage', 'Typeembalage', 'Dureestockage', 'Nombresacsproduits', 'Poidsphysiqueproduit', 'Lieustockage', 'Dateachat', 'Poidsachete', 'Qualiteproduit', 'Observations', 'Recommandations', 'Numfiche');

    public function Plantations()
    {
        return $this->hasOne('Plantation');
    }

}