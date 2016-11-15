<?php
require '../../../../includes/core/base.php';

$trackTitle = 'Journey to Atlantis';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings = array();
$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/02-journey-to-atlantis.twig', $bindings);
print($outputHtml);
