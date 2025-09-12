<?php
    require_once 'Pessoa.php';

    class Professor extends Pessoa {
        private $especialidade;
        private $salario;

        function receberAum($aum) {
            $this->setSalario($this->getSalario() + $aum);
        }

        // Métodos Especiais
        function getEspecialidade() {
            return $this->especialidade;
        }

        function setEspecialidade($e) {
            $this->especialidade = $e;
        }

        function getSalario() {
            return $this->salario;
        }

        function setSalario($s) {
            $this->salario = $s;
        }
    }
?>