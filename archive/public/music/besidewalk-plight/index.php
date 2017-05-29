<?php
require '../../../includes/core/base.php';

$pageTitle = 'Besidewalk Plight - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;

$outputHtml = $twig->render('music/besidewalk-plight/index.twig', $bindings);
print($outputHtml);
