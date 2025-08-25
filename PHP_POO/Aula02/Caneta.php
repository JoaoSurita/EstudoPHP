<?php
    // Definição da classe Caneta
    class Caneta {
        // Propriedades (atributos) da caneta
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        // Métodos
        function rabiscar() {
            if ($this->tampada == true) {
                echo "Não Consigo rabiscar pois estou tampada!";
            } else {
                echo "Estou rabiscando...";
            }
        }

        function tampar() {
            $this->tampada = true;
        }

        function destampar() {
            $this->tampada = false;
        }
    }
?>