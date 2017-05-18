<?php
class clienteController extends Controller {

    public function __construct() {
        parent::__construct();

        $_SESSION['area'] = 'Cliente';
    }

    public function index() {
        $dados = array();
        
        

        $this->loadTemplate('Cliente', $dados);
    }

}