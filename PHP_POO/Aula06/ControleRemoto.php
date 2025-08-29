<?php
    require_once 'Controlador.php';

    class ControleRemoto implements Controlador {
        private $volume;
        private $ligado;
        private $tocando;

        public function ligar() {
            $this->setLigado(true);
        }
        public function desligar() {
            $this->setLigado(false);
        }
        public function abrirMenu() {
            echo "<br>Está Ligado?: ".($this->getLigado()?"SIM":"NÃO");
            echo "<br>Está Tocando?: ".($this->getTocando()?"SIM":"NÃO");
            echo "<br>Volume: ". $this->getVolume();
            echo "<br>";
            for($i=0; $i<=$this->getVolume(); $i+=10) {
                echo "|";
            }
            echo "<br>";
        }
        public function fecharMenu() {
            echo "<br>Fechando Menu...";
        }
        public function maisVolume() {
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() + 5);
            } else {
                echo "<br>Não é possível Aumentar o Volume. Ligue a TV.";
            }
        }
        public function menosVolume() {
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() - 5);
            } else {
                echo "<br>Não é possível Diminuir o Volume. Ligue a TV.";
            }
        }
        public function ligarMudo() {
            if ($this->getLigado() && $this->getVolume() > 0) {
                $this->setVolume(0);
            }
        }
        public function desligarMudo() {
            if ($this->getLigado() && $this->getVolume() == 0) {
                $this->setVolume(50);
            }
        }
        public function play() {
            if ($this->getLigado() && !($this->getTocando())) {
                $this->setTocando(true);
            }
        }
        public function pause() {
            if ($this->getLigado() && $this->getTocando()) {
                $this->setTocando(false);
            }
        }

        // Métodos Especiais
        public function __construct() {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        // Getters
        private function getVolume() {
            return $this->volume;
        }
        private function getLigado() {
            return $this->ligado;
        }
        private function getTocando() {
            return $this->tocando;
        }

        // Setters
        private function setVolume($volume) {
            $this->volume = $volume;
        }
        private function setLigado($ligado) {
            $this->ligado = $ligado;
        }
        private function setTocando($tocando) {
            $this->tocando = $tocando;
        }
    }
?>