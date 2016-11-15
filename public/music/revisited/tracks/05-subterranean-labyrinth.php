<?php
require '../../../../includes/core/base.php';

$trackTitle = 'Subterranean Labyrinth';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings = array();
$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/05-subterranean-labyrinth.twig', $bindings);
print($outputHtml);
