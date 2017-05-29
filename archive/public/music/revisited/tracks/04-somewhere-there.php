<?php
require '../../../../includes/core/base.php';

$trackTitle = 'Somewhere There';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/04-somewhere-there.twig', $bindings);
print($outputHtml);
