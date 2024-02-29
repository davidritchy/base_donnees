<?php
namespace App\Models;
use App\Models\CRUD;

class Voiture extends CRUD{
    protected $table = 'voiture';
    protected $primaryKey = 'idvoiture';
    protected $fillable = ['marque','prix','quantite','annee','fournisseur_idfournisseur'];
}