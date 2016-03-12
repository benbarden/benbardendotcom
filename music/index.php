<?php
    require '../includes/core/base.php';
    $pageTitle = 'Music by Ben Barden';
    require '../includes/core/header.php';
?>

<!-- Page Content -->
<div class="container">

    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Music</li>
    </ul>

    <!-- Page Header -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Music by Ben Barden</h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-6">
            <p><strong>For brand new music, visit <a href="http://www.gfdmusic.com" target="_blank">gfdmusic.com</a>.</strong></p>
            <h2>Tracks index</h2>
            <p>This is an index of most of my music.
                The categories are designed to group similar(ish) tracks together.
            <p>All tracks are instrumental. Many could be ideal background or incidental music for videos or podcasts.</p>
            <p>For historic purposes you can also <a href="albums.php">browse by album</a>.</p>
<?php
    require '../includes/theme/licensing.php';
?>
            <h2>Categories</h2>
            <table class="table-striped table-condensed" style="width: 100%;">
                <thead>
                <tr>
                    <th>Name</th>
                    <th style="text-align: right;">Tracks</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="/music/category/upbeat-dance-modern.php">Upbeat/Dance/Modern</a></td>
                    <td style="text-align: right;">22</td>
                </tr>
                <tr>
                    <td><a href="/music/category/orchestral-movie-score-videogame.php">Orchestral/Movie score/Videogame</a></td>
                    <td style="text-align: right;">19</td>
                </tr>
                <tr>
                    <td><a href="/music/category/piano.php">Piano</a></td>
                    <td style="text-align: right;">17</td>
                </tr>
                <tr>
                    <td><a href="/music/category/ambient.php">Ambient</a></td>
                    <td style="text-align: right;">13</td>
                </tr>
                <tr>
                    <td><a href="/music/category/synth.php">Synth</a></td>
                    <td style="text-align: right;">6</td>
                </tr>
                <tr>
                    <td><a href="/music/category/guitar.php">Guitar</a></td>
                    <td style="text-align: right;">6</td>
                </tr>
                <tr>
                    <td><a href="/music/category/experimental-progressive-long.php">Experimental/Progressive/Long</a></td>
                    <td style="text-align: right;">15</td>
                </tr>
                </tbody>
            </table>

        </div>
        <div class="col-md-2">
            &nbsp;
        </div>
        <div class="col-md-4">
<?php
//    require '../includes/player/render.php';
?>
        </div>
    </div>

<?php
    require '../includes/theme/copyright.php';
?>

</div>
<!-- /.container -->

<?php
    require '../includes/core/scripts.php';
//    require '../includes/player/base.php';
//    require '../includes/player/playlists/all-tracks.php';
    require '../includes/core/footer.php';
?>

