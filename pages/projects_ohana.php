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
                <p class="lead"><strong>Skills employed:</strong> Usability Testing, Lo/Hi-Fi Prototyping, Iteration, Collaboration, Visual Design</p>

                <p class="lead"><strong>Tools used:</strong> Sketch, InVision, Paper prototypes, Morae</p>
            </div>
        </section>
        <hr>
        <section>
            <h5>Overview</h5>
            <p>
                In a 3-person group (<a href="http://carolynopre.me">Carolyn Opre</a>, <a href="http://duncanokes.design"> Duncan Okes</a>, and myself) created, evaluated, and iterated on a prototype of a smart home hub app, Ohana. I was especially involved in the prototype evaluation phase.
            </p>

            <figure class="figure  w-75">
                <img src="<?=URL_MEDIA?>ohana/overview.png" class="figure-img img-fluid rounded" alt="Project stages">
                <figcaption class="figure-caption mb-2">The ideation, lo-fi, and hi-fi stages of our design</figcaption>

            </figure>


            <h5>Ideation</h5>

            <h7>
                We wanted to make an app that:
            </h7>
            <ul>
                <li>Was socially conscious</li>
                <li>Reduced resource consumption</li>
                <li>Saved money on utilities</li>
                <li>Efficiently managed a home's smart devices</li>
            </ul>
            <p>
                The name ‘Ohana’ was chosen because it means family in Hawaiian, invoking a sense of global community and shared responsibility for the earth.
            </p>
            <p>
                We first brainstormed features, functions, layout, information architecture, and navigation.
            </p>
            <p>
                After this we extensively discussed the importance of different features and the viability of potential designs. Then we narrowed our focus, reworked some features, and came out with a unified vision of what we wanted Ohana to be and do.
            </p>

            <figure class="figure  w-75">
                <img src="<?=URL_MEDIA?>ohana/modulesAndLayout_Carolyn.jpg" class="figure-img img-fluid rounded" alt="Brainstorming sketches. Discussed how the contextual menu should look, among other things.">
                <figcaption class="figure-caption mb-2">Brainstorming sketches. Discussed how the contextual menu should look, among other things.</figcaption>

            </figure>

            <h5>Lo-fi Paper Prototype</h5>
            <p>
                We assembled our UI elements into a lo-fi paper prototype. The paper format was convenient for prototyping, because it didn’t require us to program interactions or make hotspots for parts of the app that were subject to change. There was a tradeoff in that we couldn't copy and pasting UI elements or make digital templates.
            </p>

            <figure class="figure  w-75">
                <img src="<?=URL_MEDIA?>ohana/paper_proto_example.jpg" class="figure-img img-fluid rounded" alt="Paper prototype example">
            </figure>

            <h5>Lo-fi Testing</h5>
            <p>
                We mainly tried to validate the navigation, the information architecture, and the intuitiveness of the “scene” and “routine” features. We wrote a task list that covered the relevant use cases. We also created questions for participants based on Nielsen’s Usability Heuristics. I adapted a script and consent forms from “Rocket Surgery Made Easy” materials. Test participants were recruited from among our friends and we tested them in person with the "think aloud" method.
            </p>
            <h7>
                Findings:
            </h7>
            <ul>
                <li>Users were confused about the meanings of “scene” and “routine,” and about the difference between the two features.</li>
                <li>Users didn’t always understand that the second layer nav was filtering the widgets or data being shown</li>
                <li>Users didn’t like how few menu items there were in the sidenav, and they didn’t intuitively know what it contained.</li>
                <li>Users wanted a way to manually edit the favorites page.</li>
            </ul>

            <h5>Hi-fi Prototype</h5>

            <div>
                <p>
                    The second iteration of the prototype was made using Sketch(with the Craft plugin), and InVision. We fleshed out the implementations of features, enhanced the prototype's visual design, and made changes according to our findings in the lo-fi testing.
                </p>

                <figure class="figure  w-75">
                    <img src="<?=URL_MEDIA?>ohana/collage_2.png" class="figure-img img-fluid rounded" alt="Hi-fi Prototype">
                </figure>

                <h7>
                    Changes:
                </h7>
                <ul>
                    <li>
                        Consolidated “scenes” and “routines” into just “routines.” We kept the functionality of scenes but gave users the option to add a trigger to scenes.
                    </li>

                    <li>
                        Changed the "Routines" tab to "Create," so that both routines and devices could be added to Ohana using that page.
                    </li>

                    <li>
                        Changed the 2nd layer nav into a “filter” bar above the widgets, to more explicitly signify the ability to sort widgets, and to improve aesthetics.
                    </li>

                    <li>
                        Turned the sidenav into a settings page, giving users a better idea of what it contained.
                    </li>

                    <li>
                        Added a process for adding widgets to the favorites page.
                    </li>
                </ul>
            </div>

            <h5>Hi-fi Testing</h5>

            <p>
                We tested the hi-fi prototype with Morae and other screen/audio recording tools. I adapted versions of materials from the lo-fi testing, added tasks related to new implementations of features, and we used the same procedures. Our goal was to validate the changes we made from the lo-fi prototype
            </p>
            <h7>
                Findings:
            </h7>
            <ul>
                <li>
                    Most users understood what routines were, but they didn’t always understand that you could interact with them directly, or where to find them.
                </li>
                <li>
                    When creating routines, users needed a more fleshed out process for choosing the state of devices
                </li>
                <li>
                    Some users didn’t perceive that the filter bar was clickable
                </li>
                <li>
                    Navigating between data pages
                </li>
            </ul>


            <h5>Result</h5>
            <p>
                The project ends after the first iteration, and it gave us the most in-depth look at the UX process that we'd had up until then
            </p>

        </section>


    </main><!-- /.container -->

<?php
    require_once PATH_INC . "footer.inc.php";
?>