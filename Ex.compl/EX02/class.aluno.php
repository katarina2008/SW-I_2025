<?php
    class Aluno{
        private $Nome;
        private $Nota1;
        private $Nota2;

        public function __constructor($nome,$n1,$n2){
            $this->Nome = $nome;
            $this->Nota1 = $n1;
            $this->Nota2 = $n2;
        }

        public function getNome(){
            return $this->Nome;
        }

        public function getNota1(){
            return $this->Nota1;
        }

        public function getNota2(){
            return $this->Nota2;
        }

        public function mediaAluno($n1,$n2){
            $media =(($n1+$n2)/2);
            return $media;
        }

        public function verificarSituacao($media){
            if($media>=7){
                echo"Situação: Aprovado!";
            }else{
                echo"Situação: Reprovado!";
            }
        }


    }








?>