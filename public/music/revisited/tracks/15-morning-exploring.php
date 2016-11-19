<?php
require '../../../../includes/core/base.php';

$trackTitle = 'Morning Exploring';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings = array();
$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/15-morning-exploring.twig', $bindings);
print($outputHtml);
