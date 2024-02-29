<?php
namespace App\Models;
use App\Models\CRUD;

class Fournisseur extends CRUD{
    protected $table = 'fournisseur';
    protected $primaryKey = 'idfournisseur';
    protected $fillable = ['nom_fournisseur','addresse_fournisseur'];

 

}