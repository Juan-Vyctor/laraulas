<?php
    /*
        as migrations são comandos que vão ser rodados no DB, do mais antigo para o mais novo
        então caso a gente faça uma tabela, depois altere ela num migration futuro, vai tar certinho

        se a gente usar make:model -m, a migration do model já vem feita na hora

        pra usar os down dos migrates é assim: php artisan migrate:rollback (só a mais recente)
        no caso dos rollback, eles são de trás pra frente; mais atual para mais antiga
        com isso em mente, a gente pode escolher exatamente quantos migrations a gente volta
        comando com quantidades específicas é php artisan migrate:rollback --step=<quantos paços>
    */
?>