<?php

$solution = preg_replace(
    '/^.*letting m be /s',
    '',
    str_replace(';int(1..9)', '', file_get_contents('gapPuzzle2.param.solution'))
);

eval('$array = '.   $solution.';');

define('N_ROWS', count($array));

require 'view.html.php';