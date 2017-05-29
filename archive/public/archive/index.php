<?php
require '../../includes/core/base.php';

$pageTitle = 'Archive';

$bindings['Site']['PageTitle'] = $pageTitle;

$outputHtml = $twig->render('archive/index.twig', $bindings);
print($outputHtml);
