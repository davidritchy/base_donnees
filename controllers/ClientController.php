<?php
namespace App\Controllers;

use App\Models\Client;
use App\Models\Registre;
use App\Providers\View;
use App\Providers\Validator;


class ClientController {

    public function index(){
        $client = new Client();
        $select = $client->select();
        if($select){
            return View::render('client/index', ['clients' => $select]);
        }else{
            return View::render('error');
        }    
    }

    
  

    public function show($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $client = new Client;
            $selectId = $client->selectId($data['id']);
            if($selectId){
                return View::render('client/show', ['client' => $selectId]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }

    public function create(){
        return View::render('client/create');
    }

    public function store($data){
        
        $validator = new Validator;
        $validator->field('nom_client', $data['nom_client'], 'Le nom')->min(2)->max(25)->required();
        $validator->field('addresse_client', $data['addresse_client'])->max(45)->required();
        $validator->field('naissance', $data['naissance'])->max(45)->required();


        if($validator->isSuccess()){
            $client = new Client;
            $insert = $client->insert($data);        
            if($insert){
                
                return View::redirect('fournisseur/create');
            }else{
                return View::render('error');
            }
        }else{
            $errors = $validator->getErrors();
            return View::render('client/create', ['errors'=>$errors, 'client' => $data]);
        }
    }

    public function edit($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $client = new Client;
            $selectId = $client->selectId($data['id']);
            if($selectId){
                return View::render('client/edit', ['client' => $selectId]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }

    public function update($data, $get){
     
        $validator = new Validator;
        $validator->field('nom_client', $data['nom_client'], 'Nom')->min(2)->max(25)->required();
        $validator->field('addresse_client', $data['addresse_client'])->max(45)->required();
        $validator->field('naissance', $data['naissance'])->max(45)->required();
    

        if($validator->isSuccess()){
                $client = new Client;
                $update = $client->update($data, $get['id']);

                if($update){
                    return View::redirect('client/show?id='.$get['id']);
                }else{
                    return View::render('error');
                } 
        }else{
            $errors = $validator->getErrors();
            return View::render('client/edit', ['errors'=>$errors, 'client' => $data]);
        }
    }

    public function delete($data=[]){

        $registre = new Registre;
        $delete_registre = $registre->delete($data['idclient']);
        if($delete_registre){

            $client = new Client;

            $delete = $client->delete($data['idclient']);
                if($delete){
                    return View::redirect('client');
                }
                else{
                    return View::render('error');
                }
        }
      
    }
}