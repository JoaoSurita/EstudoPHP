<?php
    require_once 'Pessoa.php';

    class Funcionario extends Pessoa {
        private $setor;
        private $trabalhando;

        function mudarTrabalho() {
            $this->setTrabalhando(!$this->getTrabalhando());    
        }

        // Métodos Especiais
        function getSetor() {
            return $this->setor;
        }

        function setSetor($s) {
            $this->setor = $s;
        }

        function getTrabalhando() {
            return $this->trabalhando;
        }

        function setTrabalhando($t) {
            $this->trabalhando = $t;
        }
    }
?>