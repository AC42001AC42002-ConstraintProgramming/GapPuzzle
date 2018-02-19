<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Visualiser</title>
        <style>
            .row {
            }
            .square {
                border: 1px solid black;
                display: inline-block;
                width: 70px;
                height: 70px;
                overflow: hidden;
                padding: 10px;
                font-size: 40px;
                line-height: 80px;
                text-align: center;
            }
            .square.-filled {
                background-color: blue;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="square">0</div>
            <?php for ($i = 0; $i < LENGTH; $i++) : ?>
            <div class="square"><?= $verticalGaps[$i] ?></div>
            <?php endfor ?>
        </div>
        <?php for ($i = 0; $i < LENGTH; $i++) : ?>
        <div class="row">
            <div class="square"><?= $horizontalGaps[$i] ?></div>
            <?php for ($j = 0; $j < LENGTH; ++$j) : ?>
            <div class="square <?php if ($yPoints[$i][0] - 1=== $j || $yPoints[$i][1] - 1 === $j) : ?>-filled<?php endif ?>"></div>
            <?php endfor ?>
        </div>
        <?php endfor ?>
    </body>
</html>