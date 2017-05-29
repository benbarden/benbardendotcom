<?php
require '../../../../includes/core/base.php';

$trackTitle = 'The Sword';
$pageTitle = $trackTitle.' - Revisited - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['TrackTitle'] = $trackTitle;

$outputHtml = $twig->render('music/revisited/tracks/03-the-sword.twig', $bindings);
print($outputHtml);
