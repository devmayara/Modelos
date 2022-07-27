<?php
namespace src\controllers;

use \core\Controller;

class UsuariosController extends Controller {

    public function add() {
        echo '<h1>Adicionar usuário</h1>';
        $this->render('add');
    }

}