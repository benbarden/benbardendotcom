<?php
    require '../includes/core/base.php';
    $pageTitle = 'eBooks by Ben Barden';
    require '../includes/core/header.php';
?>

<!-- Page Content -->
<div class="container">

    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">eBooks</li>
    </ul>

    <!-- Page Header -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">eBooks</h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-6">
            <h2>Intro</h2>
            <p>Since closing quickblogtips.com, I have a few eBooks that no longer have a home. So I thought I'd share them here. Hope you find them useful.</p>
        </div>
        <div class="col-md-6">
            <h2>Downloads</h2>
            <ul>
                <li><a href="/downloads/Ben_Barden_-_A_Beginners_Guide_to_Google_Analytics.pdf">A Beginner's Guide to Google Analytics</a> (1.5MB PDF)</li>
            </ul>
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
