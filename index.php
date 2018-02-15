<?php

$paramFileContent = file_get_contents('gapPuzzle2.param');

$xGapsStr = preg_replace('/^.+xGaps be /s', '', $paramFileContent);
$xGapsStr = preg_replace('/\nletting yGaps.+/s', '', $xGapsStr);

eval('$xGaps = '.$xGapsStr.';');

$yGapsStr = preg_replace('/^.+yGaps be /s', '', $paramFileContent);

eval('$yGaps = '.$yGapsStr.';');

$solution = preg_replace(
    '/^.*letting m be /s',
    '',
    str_replace(';int(1..9)', '', file_get_contents('gapPuzzle2.param.solution'))
);

eval('$array = '.   $solution.';');

define('N_ROWS', count($array));

require 'view.html.php';
