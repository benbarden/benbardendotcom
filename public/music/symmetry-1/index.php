<?php
require '../../../includes/core/base.php';

$pageTitle = 'Symmetry 1 - Music - Ben Barden';

$bindings = array();
$bindings['Site']['PageTitle'] = $pageTitle;

$outputHtml = $twig->render('music/symmetry-1/index.twig', $bindings);
print($outputHtml);
