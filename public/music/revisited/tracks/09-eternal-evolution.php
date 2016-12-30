<?php
require '../../../../includes/core/base.php';

$trackTitle = 'Eternal Evolution';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/09-eternal-evolution.twig', $bindings);
print($outputHtml);
