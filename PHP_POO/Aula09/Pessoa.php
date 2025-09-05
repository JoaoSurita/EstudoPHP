<?php
    class Pessoa {
        private $nome;
        private $idade;
        private $sexo;

        // Métodos
        public function fazerAniver() {
            $this->setIdade($this->getIdade() + 1);
        }

        // Métodos Especiais
        public function __construct($n, $i, $s) {
            $this->nome = $n;
            $this->idade = $i;
            $this->sexo = $s;
        }

        // Getters
        public function getNome() {
            return $this->nome;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function getSexo() {
            return $this->sexo;
        }

        // Setters
        public function setNome($n) {
            $this->nome = $n;
        }

        public function setIdade($i) {
            $this->idade = $i;
        }

        public function setSexo($s) {
            $this->sexo = $s;
        }
    }
?>