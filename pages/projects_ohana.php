<?php
    $title = "Ohana"; /* Title to be shown in tab*/
    $rel_path_home = "../"; /* relative path to the home directory. Ex: "../../ or "" */

    /* Don't change these pls*/
    require_once $rel_path_home . "assets/inc/page_start.inc.php";
    require_once PATH_INC . "head.inc.php";
?>

    <main role="main" class="container">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Ohana Smart Home Hub</h1>
                <p class="lead"><strong>Skills employed:</strong> Usability Testing, Lo/Hi-Fi Prototyping, Iterative Design, Teamwork</p>

                <p class="lead"><strong>Tools used:</strong> Sketch, InVision, Paper prototypes, Morae</p>
            </div>
        </section>
        <hr>
        <section>
            <h5>Overview</h5>
            <p>
                In a 3-person group (<a href="http://carolynopre.me">Carolyn Opre</a>, <a href="http://duncanokes.design"> Duncan Okes</a>, and myself) created, evaluated, and iterated on a prototype of a smart home hub app, Ohana. I was especially involved in the prototype evaluation phase.
            </p>

            <div id="process" class="carousel slide" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#process" data-slide-to="0" class="active"></li>
                    <li data-target="#process" data-slide-to="1"></li>
                    <li data-target="#process" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-75 pb-15" src="<?=URL_MEDIA?>ohana/modulesAndLayout_Carolyn.jpg" alt="Sketches">
                        <div class="carousel-caption d-none d-md-block">
                            <p>
                                An initial sketch. Discussed displaying smart devices using widgets or tiles.
                            </p>

                            <p>
                                Also discussed what the "drawer" would look like, other display options, and the scene/routine features.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-75 pb-4" src="<?=URL_MEDIA?>ohana/paper_proto_example.jpg" alt="Paper Prototype">
                        <div class="carousel-caption d-none d-md-block">
                            <p>Paper prototype example</p>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-75" src="<?=URL_MEDIA?>ohana/Home-Fav@2x.png" alt="Final Prototype">
                        <div class="carousel-caption d-none d-md-block">
                            <p>Hi-fi Prototype</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#process" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#process" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <h5>Ideation</h5>
            <p>
                From the beginning of the project we wanted our app to be socially conscious, and climate change was on our minds. So we set out to make an app that efficiently managed a smart home’s devices while focusing on reducing resource consumption (and saving money on utilities). We thought that combining practical uses with environmental benefits in this way would be attractive to potential users. The name ‘Ohana’ was chosen because it means family in Hawaiian, invoking a sense of global community and shared responsibility for the earth.
            </p>
            <p>
                We first brainstormed features, functions, layout, information architecture, and navigation. We sketched different ideas and fleshed out our options for implementing different functions.
            </p>
            <p>
                After this we extensively discussed the importance of different features and the viability of potential designs. Then we narrowed our focus, reworked some features, and came out with a unified vision of what we wanted Ohana to be and do.
            </p>


            <h5>Lo-fi Paper Prototype</h5>
            <p>
                From there we assembled the UI elements we designed into a lo-fi paper prototype, to be tested and iterated on. The paper format was convenient for prototyping, because it didn’t require us to program interactions or make hotspots for parts of the app that were subject to change. There was, however, a tradeoff in not being able to automate certain parts of the prototyping process (copy and pasting UI elements, templating).
            </p>

            <div id="affinityChart" class="carousel slide" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#affinityChart" data-slide-to="0" class="active"></li>
                    <li data-target="#affinityChart" data-slide-to="1"></li>
                    <li data-target="#affinityChart" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-75" src="<?=URL_MEDIA?>ohana/paper_proto1.jpg" alt="Home Screen">

                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-75" src="<?=URL_MEDIA?>ohana/paper_proto5.jpg" alt="Data Screen">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-75" src="<?=URL_MEDIA?>ohana/paper_proto6.jpg" alt="Settings Screen">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#affinityChart" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#affinityChart" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <h5>Lo-fi Testing</h5>
            <p>
                The main things we were trying to validate were the navigation, the information architecture, and the intuitiveness of the “scene” and “routine” features. We wrote a task list that covered the relevant use cases. We also created questions for participants based on Nielsen’s Usability Heuristics. I adapted a script and consent forms from “Rocket Surgery Made Easy” materials. Test participants were recruited from among our friends and we tested them in person. We encouraged participants to think aloud throughout the test.
            </p>
            <p>
                Findings:
            </p>
            <ul>
                <li>Users were confused about the meanings of “scene” and “routine,” and about the difference between the two.</li>
                <li>Users didn’t always understand that the second layer nav was filtering the widgets or data being shown</li>
                <li>Users didn’t like how few menu items there were in the sidenav, and they didn’t intuitively know what it contained.</li>
                <li>Users wanted a way to manually edit the favorites page.</li>
            </ul>

            <h5>Hi-fi Prototype</h5>
            <p>
                The second iteration of the prototype was made with Sketch(with the Craft plugin), and InVision. We fleshed out the implementations of features, enhanced the prototype's visual design, and made changes according to our findings in the lo-fi testing.
            </p>
            <p>
                Changes:
            </p>
            <ul>
                <li>
                    Consolidated “scenes” and “routines” into just “routines.” We kept the functionality of scenes but gave users the option to add a trigger to scenes.
                </li>

                <li>
                    Changed the "Routines" tab to "Create," so that both routines and devices could be added to Ohana using that page. This also
                </li>

                <li>
                    Changed the 2nd layer nav with a “filter” bar above the widgets, to more explicitly express the ability to sort widgets, and to improve aesthetics.
                </li>

                <li>
                    Turned the sidenav into a settings page, giving users a better idea of what it contained.
                </li>

                <li>
                    Added a process for adding widgets to the favorites page.
                </li>
            </ul>

            <h5>Hi-fi Testing</h5>
            <p>
                We tested the hi-fi prototype with Morae and other screen/audio recording tools. I adapted versions of materials from the lo-fi testing, added tasks related to new implementations of features, and we used the same procedures. Our goal was to validate the changes we made from the lo-fi prototype
            </p>
            <p>
                Findings:
            </p>
            <ul>
                <li>Users were confused about the meanings of “scene” and “routine,” and about the difference between the two.</li>
                <li>Users didn’t always understand that the second layer nav was filtering the widgets or data being shown</li>
                <li>Users didn’t like how few menu items there were in the sidenav, and they didn’t intuitively know what it contained.</li>
                <li>Users wanted a way to manually edit the favorites page.</li>
            </ul>

        </section>


    </main><!-- /.container -->

<?php
    require_once PATH_INC . "footer.inc.php";
?>