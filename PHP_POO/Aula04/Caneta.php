<?php
    class Caneta {
        public $modelo;
        private $ponta;
        private $tampada;
        private $cor;

        // Método Construtor
        public function __construct($m, $p, $c) {
            $this->modelo = $m;
            $this->ponta = $p;
            $this->cor = $c;
            $this->tampar();
        }

        public function tampar() {
            $this->tampada = true;
        }

        // Métodos Getter
        public function getModelo() {
            return $this->modelo;
        }

        public function getPonta() {
            return $this->ponta;
        }

        public function getCor() {
            return $this->cor;
        }
        
        // Métodos Setter
        public function setModelo($m) {
            $this->modelo = $m;
        }

        public function setPonta($p) {
            $this->ponta = $p;
        }

        public function setCor($c) {
            $this->cor = $c;
        }
    }
?>