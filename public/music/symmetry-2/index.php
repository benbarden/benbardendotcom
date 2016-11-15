<?php
require '../../../includes/core/base.php';

$pageTitle = 'Symmetry 2 - Music - Ben Barden';

$bindings = array();
$bindings['Site']['PageTitle'] = $pageTitle;

$outputHtml = $twig->render('music/symmetry-2/index.twig', $bindings);
print($outputHtml);
