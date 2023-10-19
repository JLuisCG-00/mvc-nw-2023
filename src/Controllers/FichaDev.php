<?php

namespace Controllers;

use Views\Renderer;

class FichaDev extends PublicController{
    private $viewData = [];
    public function run():void { //page_load
        
        $this->viewData["nombre"] = "Jose Luis Calix Galdamez";
        $this->viewData["correo"] = "jlcalixgaldamez@gmail.com";
        Renderer::render("fichadev", $this->viewData);
    }
}