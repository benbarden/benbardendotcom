<?php
require '../../../../includes/core/base.php';

$trackTitle = 'The Music Box';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/06-the-music-box.twig', $bindings);
print($outputHtml);
