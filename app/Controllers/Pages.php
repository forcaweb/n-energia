<?php

class Pages extends Controller{

    public function index(){
        $dados = [
            "tituloPagina" => "Página inicial"
        ];
        $this->view('pages/home', $dados);
    }
}
