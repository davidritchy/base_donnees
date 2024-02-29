<?php
namespace App\Controllers;

use App\Models\Fournisseur;
use App\Models\Registre;
use App\Models\Voiture;
use App\Providers\View;
use App\Providers\Validator;

class VoitureController{

    public function index(){
        $voiture = new Voiture();
        $select = $voiture->select();
        if($select){
            return View::render('voiture/index', ['voitures' => $select]);
        }else{
            return View::render('error');
        }    
    }

    public function edit($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $voiture = new Voiture;
            $selectId = $voiture->selectId($data['id']);
            if($selectId){
                return View::render('voiture/edit', ['voiture' => $selectId]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }

    public function show($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $voiture = new Voiture;
            $selectId = $voiture->selectId($data['id']);
            if($selectId){
                return View::render('voiture/show', ['voiture' => $selectId]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }

    public function create(){
        return View::render('voiture/create');
    }

    public function store($data){
        $validator = new Validator;
       
        $validator->field('marque', $data['marque'])->required();
        $validator->field('prix', $data['prix'])->required();
        $validator->field('quantite', $data['quantite'])->required();
        $validator->field('annee', $data['annee'])->required();
        $validator->field('fournisseur_idfournisseur', $data['fournisseur_idfournisseur'])->required();


        if($validator->isSuccess()){
            $voiture = new Voiture;
            $insert = $voiture->insert($data);
            if($insert){
                return View::redirect('registre/create');
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
        $validator->field('marque', $data['marque'], 'marque')->min(2)->max(25)->required();
        $validator->field('prix', $data['prix'])->required();
        $validator->field('quantite', $data['quantite'])->required();
        $validator->field('annee', $data['annee'])->required();
        $validator->field('fournisseur_idfournisseur', $data['fournisseur_idfournisseur'])->required();
        
    

        if($validator->isSuccess()){
                $voiture = new Voiture;
                $update = $voiture->update($data, $get['id']);

                if($update){
                    return View::redirect('voiture/show?id='.$get['id']);
                }else{
                    return View::render('error');
                } 
        }else{
            $errors = $validator->getErrors();
            return View::render('voiture/edit', ['errors'=>$errors, 'voiture' => $data]);
        }
    }

        public function delete($data=[]){

            $registre = new Registre;
            $delete_registre = $registre->delete($data['idvoiture']);
            if($delete_registre){

                    $voiture = new Voiture;
                    $delete_voiture = $voiture->delete($data['idvoiture']);
                        if($delete_voiture){

                                return View::redirect('voiture');
                            }
                            else{
                                return View::render('error');
                            }

                    }
    
            
        }
      
    }
