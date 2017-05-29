<?php
require '../../includes/core/base.php';

$projectTitle = 'printed.com: Wedding Collection';
$pageTitle = $projectTitle.' - Portfolio - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['ProjectTitle'] = $projectTitle;

$outputHtml = $twig->render('portfolio/printed-com-wedding-collection.twig', $bindings);
print($outputHtml);
