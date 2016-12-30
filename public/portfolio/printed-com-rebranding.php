<?php
require '../../includes/core/base.php';

$projectTitle = 'printed.com: Rebranding';
$pageTitle = $projectTitle.' - Portfolio - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['ProjectTitle'] = $projectTitle;

$outputHtml = $twig->render('portfolio/printed-com-rebranding.twig', $bindings);
print($outputHtml);
