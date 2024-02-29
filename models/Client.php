<?php
namespace App\Models;
use App\Models\CRUD;

class Client extends CRUD{
    protected $table = 'client';
    protected $primaryKey = 'idclient';
    protected $fillable = ['nom_client', 'addresse_client', 'naissance'];
}