<?php
require '../../../../includes/core/base.php';

$trackTitle = 'Rainforest';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/16-rainforest.twig', $bindings);
print($outputHtml);
