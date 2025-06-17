<?php
    class retangulo{
        private $largura;
        private $altura;

        public function __construct($largura_nova, $altura_nova){
            $this->largura = $largura_nova;
            $this->altura = $altura_nova;
        }

        public function calculararea(){
            $area = $this->largura * $this->altura;
            echo "A área do retângulo é: " . $area . "<br>";
        }
        
        public function calcularperimetro(){
            $perimetro = 2 * ($this->largura + $this->altura);
            echo "O perímetro do retângulo é: " . $perimetro . "<br>"; 
        }

        public function exibirinformacoes(){
            echo "Largura: " . $this->largura . "<br>";
            echo "Altura: " . $this->altura . "<br>";
        }
    }


?>