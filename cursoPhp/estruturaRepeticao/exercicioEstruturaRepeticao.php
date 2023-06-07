<?php

    $frutasArray = ['Maçã', 'Banana', 'Goiaba', 'Laranja', 'Maracujá', 'Manga', 'Uva', 23, 'Tangerina', 40];

    $contador = 0;
    while($contador < count($frutasArray)) {
        if (gettype($frutasArray[0] == 'string')) {
            echo ' É uma string' . '<br>';
        }
        echo $frutasArray[$contador] . '<br>';
        $contador++;
    };

    if (gettype($frutasArray[0] == 'string')) {
        echo ' É uma string' . '<br>';
    }

?>