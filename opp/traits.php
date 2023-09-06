<div class="titulo">Traits</div>

<?php

trait Validacao {
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}

trait ValidacaoMelhor {
    public function validarStringMelhor($str){
        return isset($str)&& trim($str);
    }
}



?>