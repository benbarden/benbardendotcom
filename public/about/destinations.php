<?php
require '../../includes/core/base.php';

$pageTitle = 'Destinations - Ben Barden';

$bindings = array();
$bindings['Site']['PageTitle'] = $pageTitle;

$outputHtml = $twig->render('about/destinations.twig', $bindings);
print($outputHtml);
