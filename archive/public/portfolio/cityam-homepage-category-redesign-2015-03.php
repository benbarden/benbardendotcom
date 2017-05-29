<?php
require '../../includes/core/base.php';

$projectTitle = 'City AM: Homepage/Category redesign';
$pageTitle = $projectTitle.' - Portfolio - Ben Barden';

$bindings['Site']['PageTitle'] = $pageTitle;
$bindings['ProjectTitle'] = $projectTitle;

$outputHtml = $twig->render('portfolio/cityam-homepage-category-redesign-2015-03.twig', $bindings);
print($outputHtml);
