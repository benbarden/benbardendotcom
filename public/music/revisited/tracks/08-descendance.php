<?php
require '../../../../includes/core/base.php';

$trackTitle = 'Descendance';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings = array();
$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/08-descendance.twig', $bindings);
print($outputHtml);
