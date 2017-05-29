<?php
require '../../../includes/core/base.php';

$pageTitle = 'The Unravelling of Travelling - Music - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;

$outputHtml = $twig->render('music/the-unravelling-of-travelling/index.twig', $bindings);
print($outputHtml);
