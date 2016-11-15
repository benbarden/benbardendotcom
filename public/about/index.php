<?php
require '../../includes/core/base.php';

$pageTitle = 'About Ben Barden';

$bindings = array();
$bindings['Site']['PageTitle'] = $pageTitle;

$outputHtml = $twig->render('about/index.twig', $bindings);
print($outputHtml);
