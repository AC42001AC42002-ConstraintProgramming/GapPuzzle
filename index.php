<?php

$paramFileContent = file_get_contents('gapPuzzle2.param');

$horizontalGapsStr = preg_replace('/^.+horizontalGaps be /s', '', $paramFileContent);
$horizontalGapsStr = preg_replace('/\nletting verticalGaps.+/s', '', $horizontalGapsStr);

eval('$horizontalGaps = '.$horizontalGapsStr.';');

$verticalGapsStr = preg_replace('/^.+verticalGaps be /s', '', $paramFileContent);

eval('$verticalGaps = '.$verticalGapsStr.';');

$solution = preg_replace(
    '/^.*letting m be /s',
    '',
    str_replace(';int(1..9)', '', file_get_contents('gapPuzzle2.param.solution'))
);

eval('$array = '.   $solution.';');

define('N_ROWS', count($array));

require 'view.html.php';
