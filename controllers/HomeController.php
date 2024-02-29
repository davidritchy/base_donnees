<?php
namespace App\Controllers;

use App\Models\ExampleModel;
use App\Providers\View;

class HomeController {
    
    public function index(){
        $model = new ExampleModel();
        $data = $model->getData();
       View::render('home', ['var' => $data]);
    }

    public function home(){
        $data = 'Hello from HomeController';
        include 'views/home.php';
    }
}