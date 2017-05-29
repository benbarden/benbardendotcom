<?php
require '../../../../includes/core/base.php';

$trackTitle = 'The Cliffs';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/01-the-cliffs.twig', $bindings);
print($outputHtml);
