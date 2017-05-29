<?php
require '../../../includes/core/base.php';

$pageTitle = 'A Change of Scenery - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;

$outputHtml = $twig->render('music/a-change-of-scenery/index.twig', $bindings);
print($outputHtml);
