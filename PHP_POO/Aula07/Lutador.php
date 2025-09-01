<?php
    class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        // Métodos
        public function apresentar() {
            echo "<p>+-----------------------------+</p>";
            echo "<p>Lutador: </p>". $this->getNome();
            echo "<p>Nacionalidade: </p>". $this->getNacionalidade();
            echo "<p>Idade: </p>". $this->getIdade();
            echo "<p>Peso: {$this->getPeso()} kg</p>";
            echo "<p>Categoria: </p>". $this->getCategoria();
            echo "<p>Venceu: </p>". $this->getVitorias();
            echo "<p>Perdeu: </p>". $this->getDerrotas();
            echo "<p>Empatou: </p>". $this->getEmpates();
        }

        public function status() {
            echo "<p>+-----------------------------+</p>";
            echo "{$this->getNome()} | Peso {$this->getCategoria()} | {$this->getVitorias()}
                 | {$this->getDerrotas()} | {$this->getEmpates()}";
        }

        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }

        // Métodos Especiais
        public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->setPeso($pe);
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getNacionalidade() {
            return $this->nacionalidade;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function getAltura() {
            return $this->altura;
        }

        public function getPeso() {
            return $this->peso;
        }

        public function getCategoria() {
            return $this->categoria;
        }

        public function getVitorias() {
            return $this->vitorias;
        }

        public function getDerrotas() {
            return $this->derrotas;
        }

        public function getEmpates() {
            return $this->empates;
        }

        // ------------------------

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }

        public function setIdade($idade) {
            $this->idade = $idade;
        }

        public function setAltura($altura) {
            $this->altura = $altura;
        }

        public function setPeso($peso) {
            $this->peso = $peso;
            $this->setCategoria();
        }

        public function setCategoria() {
            if ($this->getPeso() < 52.2) {
                $this->categoria = "Inválido";
            } elseif ($this->getPeso() <= 70.3) {
                $this->categoria = "Leve";
            } elseif ($this->getPeso() <= 83.9) {
                $this->categoria = "Médio";
            } elseif ($this->getPeso() <= 120.2) {
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "Inválido";
            }
        }

        public function setVitorias($vitorias) {
            $this->vitorias = $vitorias;
        }

        public function setDerrotas($derrotas) {
            $this->derrotas = $derrotas;
        }

        public function setEmpates($empates) {
            $this->empates = $empates;
        }
    }
?>