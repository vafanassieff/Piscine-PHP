#!/usr/bin/php
<?php
    if ($argc = 2)
    {
        $count = rand(0, 1);
        if ($argv[1] == "mais pourquoi cette demo ?")
            echo ("Tout simplement pour qu'en feuilletant le sujet\non ne s'apercoive pas de la nature de l'exo\n");
        if ($argv[1] == "mais pourquoi cette chanson ?")
            echo ("Parce que Kwame a des enfants\n");
        if ($argv[1] == "vraiment ?" && $count == 0)
            echo ("Nan c'est parce que c'est le premier avril\n");
        if ($argv[1] == "vraiment ?" && $count == 1)
            echo ("Oui il a vraiment des enfants\n");
    }
?>