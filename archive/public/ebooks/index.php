<?php
require '../../includes/core/base.php';

$pageTitle = 'eBooks by Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;

$outputHtml = $twig->render('ebooks/index.twig', $bindings);
print($outputHtml);
