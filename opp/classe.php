<div class="titulo">Primeira Classe</div>

<?php

class Cliente {

    // atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    // metodos
    public function apresentar(){
        return "Nome: {$this->nome}<br>Idade: {$this->idade}<br>";
    }

}

$c1 = new Cliente();
echo $c1->apresentar();

$c2 = new Cliente;
$c2->nome = "Luis Ricardo";
$c2->idade = 32;
echo $c2->apresentar();

?>