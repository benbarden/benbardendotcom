<?php
require '../../../includes/core/base.php';

$pageTitle = 'Ten - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;

$outputHtml = $twig->render('music/ten/index.twig', $bindings);
print($outputHtml);
