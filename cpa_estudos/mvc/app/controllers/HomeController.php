<?php

require_once __DIR__.'/../core/Controller.php';

class HomeController extends Controller{

    public function index(){

        $nome = 'Alessandro Kobs';
        $idade = 34;
        $this->view('home/index', ['nome' => $nome, 'idade' => $idade]);

    }
}
?>
