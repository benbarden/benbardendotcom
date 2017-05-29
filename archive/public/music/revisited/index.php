<?php
require '../../../includes/core/base.php';

$pageTitle = 'Revisited - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;

$outputHtml = $twig->render('music/revisited/index.twig', $bindings);
print($outputHtml);
