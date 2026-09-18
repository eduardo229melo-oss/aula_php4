<?php

$resposta = (string) readline("É mamífero? (sim/nao): ");

if ($resposta === "sim") {
    $resposta = (string) readline("É quadrúpede? (sim/nao): ");
    if ($resposta === "sim"){

        $resposta = (string) readline("É carnívoro? (sim/nao): ");

        if ($resposta === "sim") {
          echo("leao\n");
        }elseif ($resposta==="nao"){
            $resposta = (string) readline ("é herbivoro?(sim/nao):
            ");
        }

    }
};