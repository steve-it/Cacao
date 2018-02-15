<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planteur extends Model 
{

    protected $table = 'planteur';
    public $timestamps = true;
    protected $fillable = array('Nom_Prenom', 'Contact_Communaute', 'Age', 'sexe', 'Nombre_conjoints', 'Nombre_enfants_filles', 'Nombre_enfants_garcons', 'Taille_menage', 'NumAutorisationExploitation', 'type_contrat', 'status', 'fonction', 'Nationalite', 'Situation_Matrimoniale', 'Nombre_Plantations');

    public function Plantations()
    {
        return $this->hasMany('Plantation');
    }

    public function Appuis()
    {
        return $this->belongsToMany('Appuis');
    }

    public function Formations()
    {
        return $this->belongsToMany('Formation');
    }

}