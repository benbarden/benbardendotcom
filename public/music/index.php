<?php
require '../../includes/core/base.php';

$pageTitle = 'Music by Ben Barden';

$bindings = array();
$bindings['Site']['PageTitle'] = $pageTitle;

$outputHtml = $twig->render('music/index.twig', $bindings);
print($outputHtml);
