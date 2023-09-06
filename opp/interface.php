<div class="titulo">Interface</div>

<?php

    interface Animal {
        function respirar();

    }

    interface Canino {
        function latir(): string;
    }

    class Cachorro implements Animal, Canino {
        function respirar(){
            return "Irei usar oxigênio!<br>";
        }

        function latir(): string{
            return "au au<br>";
        }
    }

    $animal1 = new Cachorro();
    echo $animal1->respirar();
    echo $animal1->latir();

    echo "FIM!<br>";

    echo "<br>";

?>

<div class="titulo">Classe abstrata</div>

<?php

abstract class Abstrata {

    abstract public function metodo1();
    abstract protected function metodo2($paramentro);

}

abstract class FilhaAbstrata extends Abstrata{

    public function metodo1(){
        echo "Executando método 1<br>";
    }

    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata {

    public function metodo1(){
        echo "Executando método 1 extendido<br>";
        parent::metodo1();
    }

    protected function metodo2($parametro){
        echo "Executando método 2, com parametro $parametro<br>";
    }

    public function metodo3(){
        echo "Executando método3<br>";
        $this->metodo2('Interno');
    }

}

$c = new Concreta();
$c->metodo1();
//$c->metodo2('Externo');
$c->metodo3();


echo "<br>";

?>