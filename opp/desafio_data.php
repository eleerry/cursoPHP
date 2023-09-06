<div class="titulo">Desafio Data</div>

<?php
class Data{

    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function mostarData(){
        return "{$this->dia}/{$this->mes}/{$this->ano}<br>";
    }
}

$data1 = new Data;
echo $data1->mostarData();

$data2 = new Data;
$data2->dia = 30;
$data2->mes = 9;
$data2->ano = 1991;
echo $data2->mostarData();

?>

<div class="titulo">Construtor e Destrutor</div>

<?php

class Pessoa{

    public $nome;
    public $idade;

    function __construct($novoNome, $novaIdade){
        $this->nome = $novoNome;
        $this->idade = $novaIdade;
    }

    public function apresentar(){
        return "Nome: {$this->nome} | Idade: {$this->idade}<br>";
    }

}

$pessoa1 = new Pessoa("Luis Ricardo", 32);
echo $pessoa1->apresentar();

?>

<div class="titulo">Herança</div>

<?php

class Person {

    public $name;
    public $old;

    function __construct($newName, $newOld){
        $this->name = $newName;
        $this->old = $newOld;
    }

    public function showPerson(){
        return "{$this->name}, {$this->old}<br>";
    }
}

class User extends Person{

    public $login;
    
    function __construct($newName, $newOld, $newLogin){
        $this->name = $newName;
        $this->old = $newOld;
        $this->login = $newLogin;
    }

    public function showPerson(){
        return "@{$this->login}: {$this->name} | {$this->old}<br>";
    }

}

$user1 = new User('Luis Ricardo', 32, 'eleerry');
echo $user1->showPerson();


?>


<div class="titulo">Visibilidade</div>

<?php

class A {

    public $publico = "Público";
    protected $protegido = "Protegido";
    private $privado = "Privado";

    public function mostrarA(){
        echo "Class A Publico = {$this->publico}<br>";
        echo "Class A Protegido = {$this->protegido}<br>";
        echo "Class A Privado = {$this->privado}<br>";
    }

    protected function vaiPorHerança(){
        echo "Serei transmitido por herança!<br>";
    }

    private function naoMostrar(){
        echo "Não vou imprimir<br>";
    }

}

$a = new A();
$a->mostrarA();

class B extends A {
    public function mostrarB(){
        echo "Class B Publico = {$this->publico}<br>";
        echo "Class B Protegido = {$this->protegido}<br>";
        echo "Class B Privado = {$this->privado}<br>";

        parent::vaiPorHerança();

    }
}

$b = new B();
$b->mostrarB();

?>

<div class="titulo">Membros Estáticos</div>

<?php

class AA {

    public $naoStatic = 'Variável de instância';
    public static $static = "Variável de classe (estática)";

    public function mostrarA(){
        echo "Não estático = {$this->naoStatic}<br>";
        echo "Estático = " . self::$static . "<br>";
    }

    public static function mostarStaticA(){
        echo "--------------------<br>";
        //echo "Não estática = {$this->naoStatic}<br>";
        echo "Estática = " . self::$static . "<br>";
    }

}

$objA = new AA();
$objA->mostrarA();
$objA->mostarStaticA();

AA::mostarStaticA();

?>