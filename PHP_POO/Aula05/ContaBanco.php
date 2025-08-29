<?php
    class ContaBanco {
        // Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        // Métodos
        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "CC") {
                $this->setSaldo(50);
            } elseif ($t == "CP") {
                $this->setSaldo(150);
            }
        }

        public function fecharConta() {
            if ($this->getSaldo() > 0) {
                echo "<p>Conta com Dinheiro. Não é possível fecha-la.</p>";
            } elseif ($this->getSaldo() < 0) {
                echo "<p>Conta em débito. Impossível encerrar a conta.</p>";
            } else {
                $this->setStatus(false);
                echo "<p>Conta de {$this->getDono()} fechada com sucesso!</p>";
            }
        }

        public function depositar($v) {
            if ($this->getStatus(true)) {
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Depósito de R$$v na conta de {$this->getDono()}</p>";
            } else {
                echo "<p>Impossível depositar.</p>";
            }
        }

        public function sacar($v) {
            if ($this->getStatus(true)) {
                if ($this->getSaldo() >= $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de R$$v autorizado na conta de {$this->getDono()}</p>";
                } else {
                    echo "<p>Saldo Insuficiente.</p>";
                }
            } else {
                echo "<p>Impossível sacar.</p>";
            }
        }

        public function pagarMensal() {
            if ($this->getTipo() == "CC") {
                $v = 12;
            } elseif ($this->getTipo() == "CP") {
                $v = 20;
            }
            if ($this->getStatus(true)) {
                if ($this->getSaldo() > $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Mensalidade de R$$v debitada na conta de {$this->getDono()}</p>";
                } else {
                    echo "<p>Saldo Insuficiente.</p>";
                }
            } else {
                echo "<p>Impossível pagar.</p>";
            }
        }

        // Métodos Especiais
        public function __construct() {
            $this->saldo = 0;
            $this->status = false;
            echo "<p>Conta criada com Sucesso!</p>";
        }

        // Setters
        public function setNumConta($n) {
            $this->numConta = $n;
        }

        public function setTipo($t) {
            $this->tipo = $t;
        }

        public function setDono($d) {
            $this->dono = $d;
        }

        public function setSaldo($s) {
            $this->saldo = $s;
        }

        public function setStatus($s) {
            $this->status = $s;
        }

        // Getters
        public function getNumConta() {
            return $this->numConta;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function getDono() {
            return $this->dono;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function getStatus() {
            return $this->status;
        }

    }
?>