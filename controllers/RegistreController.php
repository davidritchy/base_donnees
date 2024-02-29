<?php
namespace App\Controllers;

use App\Models\Client;
use App\Models\Registre;
use App\Providers\View;
use App\Providers\Validator;

class RegistreController{


    public function index(){
        $registre = new Registre;
        $select = $registre->select();
        if($select){
            return View::render('registre/index', ['registres' => $select]);
        }else{
            return View::render('error');
        }    
    }


    public function create(){
        return View::render('registre/create');
    }

    public function edit($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $registre = new Registre;
            $selectId = $registre->selectId($data['id']);
            if($selectId){
                return View::render('registre/edit', ['registre' => $selectId]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }

    public function show($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $registre = new Registre;
            $selectId = $registre->selectId($data['id']);
            if($selectId){
                return View::render('registre/show', ['registre' => $selectId]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }

    public function store($data){
        $validator = new Validator;

        $validator->field('date', $data['date'])->required();
        $validator->field('total', $data['total'])->required();
        $validator->field('client_idclient', $data['client_idclient'])->required();
        $validator->field('voiture_idvoiture', $data['voiture_idvoiture'])->required();


        if($validator->isSuccess()){
            $registre = new Registre;
            $insert = $registre->insert($data);
          
            if($insert){
                    return View::redirect('client');
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
        $validator->field('date', $data['date'])->required();
        $validator->field('total', $data['total'])->required();
        $validator->field('voiture_idvoiture', $data['voiture_idvoiture'])->required();
        $validator->field('client_idclient', $data['client_idclient'])->required();
    

        if($validator->isSuccess()){
                $registre = new Registre;
                $update = $registre->update($data, $get['id']);

                if($update){
                    return View::redirect('registre/show?id='.$get['id']);
                }else{
                    return View::render('error');
                } 
        }else{
            $errors = $validator->getErrors();
            return View::render('registre/edit', ['errors'=>$errors, 'registre' => $data]);
        }
    }

    public function delete($data=[]){

        $voiture = new Voiture;
        $delete_voiture = $voiture->delete($data['idregistre']);
        if($delete_voiture){

            $client = new Client;
            $delete_client = $client->delete($data['idregistre']);

            if($delete_client){

                $registre = new Registre;
                $delete = $registre->delete($data['idregistre']);
                if($delete){
                    return View::redirect('registre');
                }
                else{
                    return View::render('error');
                }

            }
           
        }
      
    }
}