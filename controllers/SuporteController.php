<?php
class suporteController extends Controller {

    public function __construct() {
        parent::__construct();

        $_SESSION['area'] = 'Suporte';
    }

    public function index() {
        $dados = array();
        
        

        $this->loadTemplate('Suporte', $dados);
    }

}