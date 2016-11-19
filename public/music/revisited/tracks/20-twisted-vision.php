<?php
require '../../../../includes/core/base.php';

$trackTitle = 'Twisted Vision';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings = array();
$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/20-twisted-vision.twig', $bindings);
print($outputHtml);
