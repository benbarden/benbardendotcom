<?php
require '../../../../includes/core/base.php';

$trackTitle = 'Sailing Under Clouds';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/12-sailing-under-clouds.twig', $bindings);
print($outputHtml);
