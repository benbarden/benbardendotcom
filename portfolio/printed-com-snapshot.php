<?php
    require '../includes/core/base.php';
    $projectTitle = 'printed.com: Snapshot';
    $pageTitle = $projectTitle.' - Portfolio - Ben Barden';
    require '../includes/core/header.php';
?>

<!-- Page Content -->
<div class="container">

    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/portfolio">Portfolio</a></li>
        <li class="active"><?php print($projectTitle); ?></li>
    </ul>

    <!-- Page Header -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header"><?php print($projectTitle); ?></h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-4">
            <h2>Project details</h2>
            <p>
                <strong>Project</strong>: Snapshot
            </p>
            <p>
                <strong>Launch</strong>: circa June 2012, with minor ongoing updates
            </p>
            <p>
                <strong>Role</strong>: Concept / UI Designer / Lead Developer / Web Product Manager
            </p>
        </div>
        <div class="col-md-8">
            <h2>Summary</h2>
            <p>
                This was a fun project I came up with during a period of downtime, and continued to some extent in my own time.
                I thought of the idea for a live stats screen – “Snapshot” - and went about building it. The screen got
                the whole team excited about the sales stats.
            </p>
            <p>
                Snapshot became a permanent fixture on big screens in the London and Newcastle offices, and enabled much
                quicker observations about the sales of the day and month than the reporting screens allowed (as they
                took more clicks to open up). I even included a very simple “live chat” feature for the team to
                occasionally post messages.
            </p>
            <p>
                It probably took less work than most of the projects I worked on at printed.com, but made such a big
                impact that it’s one of my proudest achievements for the company.
            </p>
        </div>
    </div>

<?php
    require '../includes/theme/copyright.php';
?>

</div>
<!-- /.container -->

<?php
    require '../includes/core/scripts.php';
    require '../includes/core/footer.php';
?>
