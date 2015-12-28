<?php
    require '../../includes/core/base.php';
    $pageTitle = 'Piano - Music by Ben Barden';
    require '../../includes/core/header.php';
?>

<!-- Page Content -->
<div class="container">

    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/music/">Music</a></li>
        <li class="active">Piano</li>
    </ul>

    <!-- Page Header -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Piano
                <small><span id="category-track-count"></span> tracks</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-6">
<?php
    require '../../includes/theme/licensing.php';
?>
            <table class="table-striped table-condensed" style="width: 100%;">
                <thead>
                <tr>
                    <th>Name</th>
                    <th style="text-align: center;">Duration</th>
                    <th>Play</th>
                    <th>Download</th>
                </tr>
                </thead>
                <tbody id="bb-category-tracklist">
                    <tr>
                        <td colspan="4"><em>loading table...</em></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-2">
            &nbsp;
        </div>
        <div class="col-md-4">

<?php
    require '../../includes/player/render.php';
?>
        </div>
    </div>

<?php
    require '../../includes/theme/copyright.php';
?>

</div>
<!-- /.container -->

<?php
    require '../../includes/core/scripts.php';
    require '../../includes/player/base.php';
?>
<script src="/assets/js/playlists/categories/piano.js"></script>
<script>
    $(document).ready(function() {
        $('#category-track-count').html(bbMusicTracklist.length);
    });
</script>
<?php
    require '../../includes/core/footer.php';
?>