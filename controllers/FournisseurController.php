<?php
namespace App\Controllers;

use App\Models\Voiture;
use App\Models\Fournisseur;
use App\Providers\View;
use App\Providers\Validator;

class FournisseurController{

    public function index(){
        $fournisseur = new Fournisseur();
        $select = $fournisseur->select();
        if($select){
            return View::render('fournisseur/index', ['fournisseurs' => $select]);
        }else{
            return View::render('error');
        }    
    }

    public function edit($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $fournisseur = new Fournisseur;
            $selectId = $fournisseur->selectId($data['id']);
            if($selectId){
                return View::render('fournisseur/edit', ['fournisseur' => $selectId]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }


    public function show($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $fournisseur = new Fournisseur;
            $selectId = $fournisseur->selectId($data['id']);
            if($selectId){
                return View::render('fournisseur/show', ['fournisseur' => $selectId]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }

    public function create(){
        return View::render('fournisseur/create');
    }

    public function store($data){
        $validator = new Validator;
        $validator->field('nom_fournisseur', $data['nom_fournisseur'],'Nom fournisseur')->required();
        $validator->field('addresse_fournisseur', $data['addresse_fournisseur'])->required();



        if($validator->isSuccess()){
            $fournisseur = new Fournisseur;

            $insert = $fournisseur->insert($data);
            if($insert){
               
                return View::redirect('voiture/create');
            }else{
                return View::render('error');
            }

        }else{
           
            $errors = $validator->getErrors();
            return View::render('registre/create', ['errors'=>$errors, 'registre' => $data]);
        }

    }


    public function update($data, $get){
     
        $validator = new Validator;
        $validator->field('nom_fournisseur', $data['nom_fournisseur'], 'Nom fournisseur')->min(2)->max(25)->required();
        $validator->field('addresse_fournisseur', $data['addresse_fournisseur'])->max(45)->required();
        
    

        if($validator->isSuccess()){
                $fournisseur = new Fournisseur;
                $update = $fournisseur->update($data, $get['id']);

                if($update){
                    return View::redirect('fournisseur/show?id='.$get['id']);
                }else{
                    return View::render('error');
                } 
        }else{
            $errors = $validator->getErrors();
            return View::render('fournisseur/edit', ['errors'=>$errors, 'fournisseur' => $data]);
        }
    }


    public function delete($data=[]){

        $voiture = new Voiture;
        $delete_voiture = $voiture->delete($data['idfournisseur']);
        if($delete_voiture){

            $fournisseur = new Fournisseur;

            $delete = $fournisseur->delete($data['idfournisseur']);
                if($delete){
                    return View::redirect('fournisseur');
                }
                else{
                    return View::render('error');
                }
        }
      
    }

}