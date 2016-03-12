<?php
    require '../includes/core/base.php';
    $pageTitle = 'Music by Ben Barden';
    require '../includes/core/header.php';
?>

<!-- Page Content -->
<div class="container">

    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/music/">Music</a></li>
        <li class="active">Albums</li>
    </ul>

    <!-- Page Header -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Albums</h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-6">
            <h2>Browse by album</h2>
            <p><em>or <a href="index.php">browse by track</a></em></p>
            <table class="table-striped table-condensed">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Album</th>
                        <th>Released</th>
                        <th>Tracks</th>
                        <th>Duration</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="/music/a-world-beyond/">A World Beyond</a></td>
                    <td>November 2005</td>
                    <td>17</td>
                    <td>65 minutes</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="/music/besidewalk-plight/">Besidewalk Plight</a></td>
                    <td>June 2006</td>
                    <td>15</td>
                    <td>51 minutes</td>
                </tr>
                <tr>
                    <td>1A</td>
                    <td><a href="/music/hidden-in-the-beyond/">Hidden in the Beyond</a></td>
                    <td>January 2007</td>
                    <td>13</td>
                    <td>69 minutes</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><a href="/music/twice-midnight/">Twice Midnight</a></td>
                    <td>March 2008</td>
                    <td>16 (+3)</td>
                    <td>74 minutes</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><a href="/music/the-unravelling-of-travelling/">The Unravelling of Travelling</a></td>
                    <td>January 2008</td>
                    <td>21</td>
                    <td>73 minutes</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><a href="/music/a-change-of-scenery/">A Change of Scenery</a></td>
                    <td>November 2009</td>
                    <td>14 (+6)</td>
                    <td>71 minutes</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h2>Albums</h2>
            <div class="row" style="margin-top: 10px;">
                <div class="col-md-4">
                    <a href="/music/a-world-beyond/">
                        <img src="/images/music/albums/a-world-beyond-250px.jpg" alt="A World Beyond" style="border: 0; height: 150px; width: 150px;">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/music/besidewalk-plight/">
                        <img src="/images/music/albums/besidewalk-plight-250px.jpg" alt="Besidewalk Plight" style="border: 0; height: 150px; width: 150px;">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/music/hidden-in-the-beyond/">
                        <img src="/images/music/albums/hidden-in-the-beyond-250px.jpg" alt="Hidden in the Beyond" style="border: 0; height: 150px; width: 150px;">
                    </a>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-md-4">
                    <a href="/music/twice-midnight/">
                        <img src="/images/music/albums/twice-midnight-250px.jpg" alt="Twice Midnight" style="border: 0; height: 150px; width: 150px;">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/music/the-unravelling-of-travelling/">
                        <img src="/images/music/albums/the-unravelling-of-travelling-250px.jpg" alt="The Unravelling of Travelling" style="border: 0; height: 150px; width: 150px;">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/music/a-change-of-scenery/">
                        <img src="/images/music/albums/a-change-of-scenery-250px.jpg" alt="A Change of Scenery" style="border: 0; height: 150px; width: 150px;">
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!--
    <div class="row">
        <div class="col-md-6">
            <h2>Albums</h2>
            <ul>
                <li>A World Beyond - November 2005</li>
                <li>Besidewalk Plight - June 2006</li>
                <li>Hidden in the Beyond – January 2007 <em>(remixed version of “A World Beyond”)</em></li>
                <li><a href="/music/the-unravelling-of-travelling/">The Unravelling of Travelling</a> – January 2008</li>
                <li>Twice Midnight - March 2008</li>
                <li><a href="http://www.last.fm/music/Ben+Barden/A+Change+of+Scenery">A Change of Scenery</a> (last.fm) – November 2009</li>
                <li><a href="/music/parallel-paths/">Parallel Paths</a> – upcoming sixth studio album</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h2>New tracks</h2>
            <p>These links go to Soundcloud.</p>
            <ul>
                <li><a href="https://soundcloud.com/ben-barden/the-turning-tide-2013-remix">The Turning Tide (2013 Remix)</a></li>
                <li><a href="https://soundcloud.com/ben-barden/november-dawn">November Dawn</a> – added 17 November 2014</li>
                <li><a href="https://soundcloud.com/ben-barden/turn-it-up">Turn It Up</a> – added 18 November 2014</li>
                <li><a href="https://soundcloud.com/ben-barden/aries-part-3-2015-remix">Aries Part 3 (2015 Remix)</a> – added 19 January 2015</li>
                <li><a href="https://soundcloud.com/ben-barden/overture">Overture</a> – added 1 March 2015</li>
                <li><a href="https://soundcloud.com/ben-barden/first-tide">First Tide</a> – added 8 March 2015</li>
                <li><a href="https://soundcloud.com/ben-barden/chronicles">Chronicles</a> – added 22 March 2015</li>
                <li><a href="https://soundcloud.com/ben-barden/measure-an-infinite-distance-2015-remix">Measure an infinite distance (2015 remix)</a> - added 24 March 2015</li>
                <li><a href="https://soundcloud.com/ben-barden/low-gravity-2015-remix">Low Gravity (2015 remix)</a> - added 24 March 2015</li>
                <li><a href="https://soundcloud.com/ben-barden/legacy-layers">Legacy Layers</a> - added 31 March 2015</li>
                <li><a href="https://soundcloud.com/ben-barden/the-dark-room">The Dark Room</a> - added 31 March 2015</li>
                <li><a href="https://soundcloud.com/ben-barden/dry-ice">Dry Ice</a> - added 31 March 2015</li>
                <li><a href="https://soundcloud.com/ben-barden/subterranean-labyrinth-2015-remix">Subterranean Labyrinth (2015 remix)</a> - added 29 June 2015</li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h2>Favourite artists</h2>
            <ul>
                <li>Above &amp; Beyond</li>
                <li>All Good Funk Alliance</li>
                <li>The Beatles</li>
                <li>Big Boss Man</li>
                <li>BMD</li>
                <li>Bruce Hornsby</li>
                <li>Chicane</li>
                <li>Crowded House</li>
                <li>Dan Arborise</li>
                <li>Dan Croll</li>
                <li>David Gray</li>
                <li>Dire Straits</li>
                <li>The Divine Comedy</li>
                <li>Elton John</li>
                <li>Everything But The Girl</li>
                <li>Fleetwood Mac</li>
                <li>Genesis</li>
                <li>Goldfrapp</li>
                <li>Jaytech</li>
                <li>Jean Michel Jarre</li>
                <li>Late Night Alumni</li>
                <li>Mark Knopfler</li>
                <li>Martin Solveig</li>
                <li>Mike &amp; the Mechanics</li>
                <li>Mike Oldfield</li>
                <li>Moby</li>
                <li>Paul McCartney</li>
                <li>Simon &amp; Garfunkel</li>
                <li>Skeewiff</li>
                <li>Smoove &amp; Turrell</li>
                <li>Solarstone</li>
                <li>Space Manoeuvres</li>
                <li>Timewarp Inc.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h2>Spotify playlists</h2>
            <ul>
                <li><a href="http://open.spotify.com/user/ben.barden/playlist/0xGbMvubQga068CG1inMC3">Funk &amp; Soul Vol. 1</a></li>
                <li><a href="http://open.spotify.com/user/ben.barden/playlist/31jDAzZudKBbrr5aUuj1pC">Funk &amp; Soul Vol. 2</a></li>
                <li><a href="http://open.spotify.com/user/ben.barden/playlist/0slDfpNKuCSvsNo9fHJtQG">Funk &amp; Soul Vol. 3</a></li>
                <li><a href="http://open.spotify.com/user/ben.barden/playlist/5W2cTPRifyAaM9ev0hTYOh">Funk &amp; Soul Vol. 4</a></li>
                <li><a href="http://open.spotify.com/user/ben.barden/playlist/6qABC971wJIrdYw4q6HiYz">Funk &amp; Soul Vol. 5</a></li>
                <li><a href="http://open.spotify.com/user/ben.barden/playlist/2EWSxGCeQyPifYWqiMaUbN">Funk &amp; Soul Vol. 6</a> – added 27 September 2014</li>
                <li><a href="http://open.spotify.com/user/ben.barden/playlist/7zgXKxhkwRPJEdb3D2QKxN">Funk &amp; Soul Vol. 7</a> – added 19 October 2014</li>
                <li><a href="http://open.spotify.com/user/ben.barden/playlist/3ZkLPZlVcFcIpyRRx01EZR">Funk &amp; Soul Vol. 8</a> – added 7 December 2014</li>
                <li><a href="http://open.spotify.com/user/ben.barden/playlist/25pUQPrpcTDdr2kztPgJAG">Funk &amp; Soul Vol. 9</a> – added 21 February 2015</li>
            </ul>
        </div>
    </div>
    -->

<?php
    require '../includes/theme/copyright.php';
?>

</div>
<!-- /.container -->

<?php
    require '../includes/core/scripts.php';
    require '../includes/core/footer.php';
?>
