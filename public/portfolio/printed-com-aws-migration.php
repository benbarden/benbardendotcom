<?php
require '../../includes/core/base.php';

$projectTitle = 'printed.com: AWS migration';
$pageTitle = $projectTitle.' - Portfolio - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['ProjectTitle'] = $projectTitle;

$outputHtml = $twig->render('portfolio/printed-com-aws-migration.twig', $bindings);
print($outputHtml);
