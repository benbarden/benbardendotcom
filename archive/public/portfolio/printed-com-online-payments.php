<?php
require '../../includes/core/base.php';

$projectTitle = 'printed.com: Online payments';
$pageTitle = $projectTitle.' - Portfolio - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['ProjectTitle'] = $projectTitle;

$outputHtml = $twig->render('portfolio/printed-com-online-payments.twig', $bindings);
print($outputHtml);
