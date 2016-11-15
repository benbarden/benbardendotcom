<?php
require '../../includes/core/base.php';

$pageTitle = 'Portfolio - Ben Barden';

$bindings = array();
$bindings['Site']['PageTitle'] = $pageTitle;

$outputHtml = $twig->render('portfolio/index.twig', $bindings);
print($outputHtml);
