<?php
require '../../../../includes/core/base.php';

$trackTitle = 'Stormy Shores';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/13-stormy-shores.twig', $bindings);
print($outputHtml);
