<?php
require '../../includes/core/base.php';

$projectTitle = 'printed.com: Online invoicing';
$pageTitle = $projectTitle.' - Portfolio - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['ProjectTitle'] = $projectTitle;

$outputHtml = $twig->render('portfolio/printed-com-online-invoicing.twig', $bindings);
print($outputHtml);
