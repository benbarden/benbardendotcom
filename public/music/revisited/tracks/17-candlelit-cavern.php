<?php
require '../../../../includes/core/base.php';

$trackTitle = 'Candlelit Cavern';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings = array();
$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/17-candlelit-cavern.twig', $bindings);
print($outputHtml);
