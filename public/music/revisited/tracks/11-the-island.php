<?php
require '../../../../includes/core/base.php';

$trackTitle = 'The Island';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/11-the-island.twig', $bindings);
print($outputHtml);
