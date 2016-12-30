<?php
require '../../../../includes/core/base.php';

$trackTitle = 'Green Fields';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/07-green-fields.twig', $bindings);
print($outputHtml);
