<?php
require '../../../../includes/core/base.php';

$trackTitle = 'Aries';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/10-aries.twig', $bindings);
print($outputHtml);
