<?php
require '../../../includes/core/base.php';

$pageTitle = 'Voyage into Space - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;

$outputHtml = $twig->render('music/voyage-into-space/index.twig', $bindings);
print($outputHtml);
