<?php

$paramFileContent = file_get_contents('gapPuzzle2.param');

$horizontalGapsStr = preg_replace('/^.+horizontalGaps be /s', '', $paramFileContent);
$horizontalGapsStr = preg_replace('/\nletting verticalGaps.+/s', '', $horizontalGapsStr);

eval('$horizontalGaps = '.$horizontalGapsStr.';');

$verticalGapsStr = preg_replace('/^.+verticalGaps be /s', '', $paramFileContent);

eval('$verticalGaps = '.$verticalGapsStr.';');

$yPointsStr = preg_replace(
    '/^.*letting yPoints be /s',
    '',
    str_replace([';int(1..9)', ';int(1..2)'], '', file_get_contents('gapPuzzle2.param.solution'))
);

eval('$yPoints = '.   $yPointsStr.';');

define('LENGTH', count($yPoints));

require 'view.html.php';
