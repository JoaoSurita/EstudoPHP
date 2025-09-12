<?php
    class Pessoa {
        private $nome;
        private $idade;
        private $sexo;

        function fazerAniv() {
            $this->setIdade($this->getIdade() + 1);
        }

        // Métodos Especiais
        function getNome() {
            return $this->nome;
        }

        function setNome($n) {
            $this->nome = $n;
        }

        function getIdade() {
            return $this->idade;
        }

        function setIdade($i) {
            $this->idade = $i;
        }

        function getSexo() {
            return $this->sexo;
        }

        function setSexo($s) {
            $this->sexo = $s;
        }
    }
?>