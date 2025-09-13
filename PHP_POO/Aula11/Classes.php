<?php
    // Classe Abstrata
    abstract class Pessoa {
        private $nome;
        private $idade;
        private $sexo;

        // Método Final
        public final function fazerAniv() {
            $this->idade ++;
        }
    }

    // Herança de Implementação
    class Visitante extends Pessoa {}

    // Herança por Diferença
    class Aluno extends Pessoa {
        private $matricula;
        private $curso;

        public function pagarMens() {
            echo "Mensalidade Paga!";
        }
    }

    // Especialização da Classe Aluno
    class Bolsista extends Aluno {
        private $bolsa;

        public function renovarBolsa() {
            echo "Bolsa Renovada!";
        }

        // Sobrepondo o método pagarMens da Classe Aluno
        public function pagarMens() {
            echo "É bolsista! então paga com desconto!";
        }
    }
?>