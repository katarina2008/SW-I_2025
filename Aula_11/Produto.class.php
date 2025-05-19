<?php
    Class Produto{
        public $Nome;
        public $Preco;
        public $Quantidade;


        public function _construct($Nome, $Preco = 0.0, $Quantidade = 0.0){
            $this->Nome = $Nome;
            $this->Preco = $Preco;
            $this->Quantidade = $Quantidade;

        }

        public function getNome($Nome){
            return $this->Nome = $Nome;
        }

        public function setNome($Nome){
            $this->Nome = $Nome;
        }

        public function getPreco($Preco){
            return $this->Preco = $Preco;
        }

        public function setPreco($Preco){
            $this->Preco = $Preco;
        }

        public function adicionarEstoque($Quantidade){
            if ($Quantidade >= 0){
                $this->Quantidade += $Quantidade;
            } 

        }

        public function removerEstoque($Quantidade){
            if ($Quantidade > 0 ){
                $this->Quantidade -= $Quantidade;
            }

        }

        public function mostrarDetalhes(){
            echo "Nome: " . $this->Nome . "<br>";
            echo "Preço: " . $this->Preco . "<br>";
            echo "Quantidade: " . $this->Quantidade . "<br>";
        }

    }

    
    



?>