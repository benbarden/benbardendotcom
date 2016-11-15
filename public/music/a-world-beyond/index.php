<?php
require '../../../includes/core/base.php';

$pageTitle = 'A World Beyond - Music - Ben Barden';

$bindings = array();
$bindings['Site']['PageTitle'] = $pageTitle;

$outputHtml = $twig->render('music/a-world-beyond/index.twig', $bindings);
print($outputHtml);
