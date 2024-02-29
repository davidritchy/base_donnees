<?php
namespace App\Models;
use App\Models\CRUD;

class Registre extends CRUD{
    protected $table = 'registre';
    protected $primaryKey = 'idregistre';
    protected $fillable = ['date', 'total', 'client_idclient','voiture_idvoiture'];

   

}