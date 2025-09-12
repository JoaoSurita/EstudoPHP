<?php
    require_once 'Pessoa.php';

    class Aluno extends Pessoa {
        private $matr;
        private $curso;

        function cancelarMatr() {
            echo "<p>Sua Matrícula será cancelada!</p>";
        }

        // Métodos Especiais
        function getMatr() {
            return $this->matr;
        }

        function setMatr($m) {
            $this->matr = $m;
        }

        function getCurso() {
            return $this->curso;
        }

        function setCurso($c) {
            $this->curso = $c;
        }
    }
?>