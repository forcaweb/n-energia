<?php

class Paginas extends Controller{

    public function index(){
        $dados = [
            "tituloPagina" => "Página inicial"
        ];
        $this->view('paginas/home', $dados);
    }

    public function watch(){
      $dados = [
          "tituloPagina" => "Página de videos"
      ];
      $this->view('paginas/watch', $dados);
  }
}
