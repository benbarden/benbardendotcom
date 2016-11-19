<?php
require '../../../../includes/core/base.php';

$trackTitle = 'No Way Out';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings = array();
$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/18-no-way-out.twig', $bindings);
print($outputHtml);
