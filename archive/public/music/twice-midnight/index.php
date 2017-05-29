<?php
require '../../../includes/core/base.php';

$pageTitle = 'Twice Midnight - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;

$outputHtml = $twig->render('music/twice-midnight/index.twig', $bindings);
print($outputHtml);
