<?php
require '../../../../includes/core/base.php';

$trackTitle = 'Into Darkness';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/19-into-darkness.twig', $bindings);
print($outputHtml);
