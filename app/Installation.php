<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Installation extends Model 
{

    protected $table = 'installation';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('id_plantation', 'dateinstallation', 'Foret', 'Delimitation', 'Defrichage', 'Abattagesous-bois', 'Abattageselectif', 'TronconnageAndainage', 'Piquetage', 'Trouaisoncacaoyers', 'Plantingcacaoyers', 'Trouaisonbananiers', 'Plantingbananiers', 'NombrePlantsCacaoyers', 'NombrePlantsBananiers', 'NombrePlantsSafoutiers', 'NombrePlantsAvocatiers', 'NombrePlantsGoyaviers', 'NombrePlantsPapayers', 'NombrePlantsManguiers', 'NombrePlants', 'CocotiersNombrePlantsAgrumes', 'NombrePlantsPalmiershuile', 'NombrePlantsColatiers', 'EcartementAgrumes', 'EcartementPalmiershuile', 'EcartementCocotiers', 'EcartementManguiers', 'EcartementPapayers', 'EcartementGoyaviers', 'EcartementCacaoyers', 'EcartementBananiers', 'EcartementColatiers', 'EcartementSafoutiers', 'EcartementAvocatiers', 'OrigineCacaoyers', 'OrigineBananiers', 'OrigineSafoutiers', 'OrigineAvocatiers', 'OrigineColatiers', 'OrigineAgrumes', 'OriginePalmiershuile', 'OriginePapayers', 'OrigineCocotiers', 'OrigineManguiers', 'OrigineGoyaviers', 'Observations', 'Recommandations', 'Numfiche', 'idpersonnel');

    public function Plantation()
    {
        return $this->belongsTo('Plantation');
    }

}