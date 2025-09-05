<?php
    require_once 'Publicacao.php';
    require_once 'Pessoa.php';

    class Livro implements Publicacao {
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function detalhes() {
            echo "<p>Livro '{$this->getTitulo()}' escrito por {$this->getAutor()}</p>";
            echo "<p>Páginas: {$this->getTotPaginas()}</p>";
            echo "<p>Sendo lido por {$this->getLeitor()->getNome()}</p>";
        }

        public function abrir() {
            if ($this->getAberto() == false) {
                $this->setAberto(true);
            } else {
                echo "O livro já aberto.";
            }
        }

        public function fechar() {
            if ($this->getAberto() == true) {
                $this->setAberto(false);
            } else {
                echo "O livro ja está fechado";
            }
        }

        public function folhear($f) {
            if ($this->getAberto() == true && $f > $this->totPaginas) {
                $this->setPagAtual(0);
            } else {
                $this->setPagAtual($f);
                echo $this->getPagAtual();
            }
        }

        public function avancarPag() {
            if ($this->getAberto() == true && $this->getPagAtual() < $this->totPaginas) {
                $this->setPagAtual($this->getPagAtual() + 1);
                echo $this->getPagAtual();
            } elseif ($this->getAberto() == false) {
                echo "O livro está fechado.";
            }
        }

        public function voltarPag() {
            if ($this->getAberto() == true && $this->getPagAtual() != 0) {
                $this->setPagAtual($this->getPagAtual() - 1);
            } else {
                echo "Você está no início do livro.";
            }
        }

        // Métodos Especiais
        public function __construct($t, $a, $tp, $l) {
            $this->titulo = $t;
            $this->autor = $a;
            $this->totPaginas = $tp;
            $this->pagAtual = 0;
            $this->aberto = false;
            $this->leitor = $l;
        }

        // Getters
        public function getTitulo() {
            return $this->titulo;
        }

        public function getAutor() {
            return $this->autor;
        }

        public function getTotPaginas() {
            return $this->totPaginas;
        }

        public function getPagAtual() {
            return $this->pagAtual;
        }

        public function getAberto() {
            return $this->aberto;
        }

        public function getLeitor() {
            return $this->leitor;
        }
        
        // Setters
        public function setTitulo($t) {
            $this->titulo = $t;
        }

        public function setAutor($a) {
            $this->autor = $a;
        }

        public function setTotPaginas($tp) {
            $this->totPaginas = $tp;
        }

        public function setPagAtual($pa) {
            $this->pagAtual = $pa;
        }

        public function setAberto($a) {
            $this->aberto = $a;
        }

        public function setLeitor($l) {
            $this->leitor = $l;
        }
    }
?>