<?php

$resposta = (string) readline("É mamífero? (sim/nao): ");

if ($resposta === "sim") {

    $resposta = (string) readline("É quadrúpede? (sim/nao): ");

    if ($resposta === "sim") {

        $resposta = (string) readline("É carnívoro? (sim/nao): ");

        if ($resposta === "sim") {
            echo "Leão.\n";
        } elseif ($resposta === "nao") {

            $resposta = (string) readline("É herbívoro? (sim/nao): ");

            if ($resposta === "sim") {
                echo "Cavalo.\n";
            }
        }

    } elseif ($resposta === "nao") {

        $resposta = (string) readline("É primata? (sim/nao): ");

        if ($resposta === "sim") {

            $resposta = (string) readline("É humano? (sim/nao): ");

            if ($resposta === "sim") {
                echo "Homem.\n";
            } elseif ($resposta === "nao") {
                echo "Macaco.\n";
            }

        } elseif ($resposta === "nao") {

            $resposta = (string) readline("É capaz de voar? (sim/nao): ");

            if ($resposta === "sim") {
                echo "Morcego.\n";
            } elseif ($resposta === "nao") {

                $resposta = (string) readline("Vive na água? (sim/nao): ");

                if ($resposta === "sim") {
                    echo "Baleia.\n";
                }
            }
        }
    }

} elseif ($resposta === "nao") {

    $resposta = (string) readline("É ave? (sim/nao): ");

    if ($resposta === "sim") {

        $resposta = (string) readline("É não voadora? (sim/nao): ");

        if ($resposta === "sim") {

            $resposta = (string) readline("É tropical? (sim/nao): ");

            if ($resposta === "sim") {
                echo "Avestruz.\n";
            } elseif ($resposta === "nao") {

                $resposta = (string) readline("É polar? (sim/nao): ");

                if ($resposta === "sim") {
                    echo "Pinguim.\n";
                }
            }

        } elseif ($resposta === "nao") {

            $resposta = (string) readline("É aquática? (sim/nao): ");

            if ($resposta === "sim") {
                echo "Pato.\n";
            } elseif ($resposta === "nao") {
                echo "Águia.\n";
            }
        }

    } elseif ($resposta === "nao") {

        $resposta = (string) readline("É réptil? (sim/nao): ");

        if ($resposta === "sim") {

            $resposta = (string) readline("Possui casco? (sim/nao): ");

            if ($resposta === "sim") {
                echo "Tartaruga.\n";
            } elseif ($resposta === "nao") {

                $resposta = (string) readline("Vive na água? (sim/nao): ");

                if ($resposta === "sim") {
                    echo "Crocodilo.\n";
                } elseif ($resposta === "nao") {
                    echo "Cobra.\n";
                }
            }
        }
    }
}