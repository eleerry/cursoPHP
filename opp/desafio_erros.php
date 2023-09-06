<div class="titulo">Encontre Erros</div>

<?php

interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {

    public function metodo3(){
        echo "Estou funcionando!<br>";
    }

    public function metodo1(){
        echo "Estou funcionando na Classe!<br>";
    }
}

class Classe extends ClasseAbstrata{

    public $parametro;

    function __construct($novoParametro){
        $this->parametro = $novoParametro; 
    }

    public function metodo2($parametro){
        echo "Estou funcionando na Classe!<br>";
    }

    public function metodo3(){
        echo "Estou funcionando na Classe!<br>";
    }
}

$exemplo = new Classe('Parametro');
$exemplo->metodo3()

?>