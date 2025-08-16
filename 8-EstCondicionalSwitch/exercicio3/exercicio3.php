<?php
    $estado = $_GET["estado"];

    switch ($estado) {
        case "AC": case "AP": case "AM": case "PA": case "RO": case "RR": case "TO":
            echo "O estado que você escolheu é da Região Norte";
            break;
        case "AL": case "BA": case "CE": case "MA": case "PB": case "PE": case "PI": case "RN": case "SE":
            echo "O estado que você escolheu é da Região Nordeste";
            break;
        case "DF": case "GO": case "MT": case "MS":
            echo "O estado que você escolheu é da Região Centro-Oeste";
            break;
        case "ES": case "MG": case "RJ": case "SP":
            echo "O estado que você escolheu é da Região Sudeste";
            break;
        case "PR": case "RS": case "SC":
            echo "O estado que você escolheu é da Região Sul";
            break;
    }
?>