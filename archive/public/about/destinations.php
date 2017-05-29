<?php
require '../../includes/core/base.php';

$pageTitle = 'Destinations - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;

$outputHtml = $twig->render('about/destinations.twig', $bindings);
print($outputHtml);
