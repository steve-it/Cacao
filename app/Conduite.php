<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conduite extends Model 
{

    protected $table = 'conduite';
    public $timestamps = true;
    protected $fillable = array('id_plantation', 'dateconduite', 'Nombre_Cacaoyers', 'NombreBananiers', 'NombreSafoutiers', 'NombreAvocatiers', 'NombreManguiers', 'NombreCocotiers', 'NombreAgrumes', 'NombreGoyaviers', 'NombrePapayers', 'NombreColatiers', 'NombrePlantsMorts', 'NombrePlantsremplaces', 'NombrePlantsnon-remplaces', 'Remplacementmanquants', 'Egourmandage', 'Tailles', 'Recoltesanitaire', 'Presenceattaqueinsectes', 'Presencepourriturebrune', 'Traitementinsecticide', 'Traitementfongicide', 'Produitquantiteutilise', 'Anneeregeneration', 'Typeregeneration', 'Nombreplantsregeneressemence', 'superficiecorrespondante', 'Originesplantssemence', 'Varietes', 'idpesrsonnel', 'observations', 'recommandations', 'NumFiche');

    public function Plantations()
    {
        return $this->hasOne('Plantation');
    }

}