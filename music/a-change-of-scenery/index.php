<?php
    require '../../includes/core/base.php';
    $pageTitle = 'A Change of Scenery - Music - Ben Barden';
    require '../../includes/core/header.php';
?>

<!-- Page Content -->
<div class="container">

    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/music/">Music</a></li>
        <li><a href="/music/albums.php">Albums</a></li>
        <li class="active">A Change of Scenery</li>
    </ul>

    <!-- Page Header -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">A Change of Scenery</h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-6">
            <p>
                A Change of Scenery is my fifth album. Its name comes from my relocation back to the UK in 2009,
                after two and a half years living in Australia.
            </p>
            <p>
                The album is actually more of a "loose ends" compilation, but as there is plenty of new material
                and the quality is good, I list it as my fifth album.
            </p>
            <p>
                The cover is typically British: a snowy landscape
                with a red phone box. An alternative cover included a photo of me in front of Big Ben.
            </p>
            <h2>Remixology</h2>
            <p>The album includes several remixes of tracks from earlier albums:</p>
            <ul>
                <li><a href="#track=1">Longing</a> - a new version of "Travelling Unravelled"</li>
                <li><a href="#track=5">Nebular Dreaming</a> - a new version of "Nebular Dreams</li>
                <li><a href="#track=9">The Wilderness, Part 2</a> - a new version of "The Wilderness"</li>
                <li><a href="#track=17">Lifeline II</a> - a new version of "Lifeline"</li>
            </ul>
            <h2>Loose ends</h2>
            <ul>
                <li>The similar titles used for
                    <a href="#track=4">Sunwatching</a>,
                    <a href="#track=7">Moonsurfing</a>
                        and
                    <a href="#track=14">Starlining</a>
                        are linked to the original
                    title for the album - "Sun, Moon and Stars".</li>
                <li><a href="#track=8">Stepping Stones</a>
                    gets its name from the fact it bridges the gaps between a few tracks. A track called
                    "Begin Spring" forms the opening and closing of the piece, whereas two tracks from "Citadel City" -
                    "Into the unknown" and "The Underdog" - make up most of the remainder.</li>
                <li>
                    The remixed tracks from "Besidewalk Plight" were originally going to
                    become a complete album remix, similar to "Hidden in the Beyond".</li>
            </ul>
            <h2>Album changes</h2>
            <p>
                Some tracks were originally written for other albums:
            </p>
            <ul>
                <li><a href="#track=6">Deviance</a> - written for "Forgotten Past"</li>
                <li><a href="#track=19">Forgotten Past</a> - written for "Forgotten Past"</li>
                <li><a href="#track=20">The Sounds of Time</a> - written for "Forgotten Past"</li>
                <li><a href="#track=2">Blanket of Snow</a> - written for "Landscapes"</li>
                <li><a href="#track=3">Silent Shore</a> - written for "Landscapes"</li>
                <li><a href="#track=12">Listen for the mountains</a> - written for "Citadel City"</li>
                <li><a href="#track=4">Sunwatching</a> - written for "Citadel City"; originally the title track</li>
                <li><a href="#track=10">Invisible in the Shadows</a> - written for "The Unravelling of Travelling"</li>
                <li><a href="#track=15">Model Railway</a> - written for "The Unravelling of Travelling"</li>
                <li><a href="#track=16">Climbing the Peak</a> - written for "The Unravelling of Travelling"</li>
            </ul>
        </div>
        <div class="col-md-2">
            &nbsp;
        </div>
        <div class="col-md-4">

            <img src="/images/music/albums/a-change-of-scenery-250px.jpg" alt="Ben Barden - A Change of Scenery">
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
//    require '../../includes/player/playlists/a-change-of-scenery.php';
?>
<script src="/assets/js/playlists/albums/a-change-of-scenery.js"></script>
<?php
    require '../../includes/core/footer.php';
?>

