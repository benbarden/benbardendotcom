<?php
require '../../../includes/core/base.php';

$pageTitle = 'Hidden in the Beyond - Music - Ben Barden';

$bindings = array();
$bindings['Site']['PageTitle'] = $pageTitle;

$outputHtml = $twig->render('music/hidden-in-the-beyond/index.twig', $bindings);
print($outputHtml);
