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
                In a 3-person group (<a href="http://carolynopre.me">Carolyn Opre</a>, <a href="http://duncanokes.design"> Duncan Okes</a>, and myself) created, evaluated, and iterated on a prototype of a smart home hub app, Ohana. I was especially involved in the prototype evaluation phases.
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
                <li>Reduces resource consumption</li>
                <li>Saves money on utilities</li>
                <li>Efficiently manages a home's smart devices</li>
            </ul>
            <p>
                The name ‘Ohana’ was chosen because it means family in Hawaiian, invoking a sense of global community and shared responsibility for the earth.
            </p>
            <p>
                We first brainstormed features, layout, information architecture, and navigation. Through discussion, we then narrowed our focus, reworked features, and came out with a unified vision of what we wanted Ohana to be.
            </p>

            <figure class="figure  w-75">
                <img src="<?=URL_MEDIA?>ohana/modulesAndLayout_Carolyn.jpg" class="figure-img img-fluid rounded" alt="Brainstorming sketches. Discussed how the contextual menu should look, among other things.">
                <figcaption class="figure-caption mb-2">Brainstorming sketches. Discussed how the contextual menu should look, among other things.</figcaption>

            </figure>

            <h5>Lo-fi Paper Prototype</h5>
            <p>
                We assembled our UI elements into a lo-fi paper prototype. The paper format was convenient for prototyping because it didn’t require us to program interactions for tentative parts of the design. However, we couldn't copy and paste UI elements or make digital templates.
            </p>

            <figure class="figure  w-75">
                <img src="<?=URL_MEDIA?>ohana/paper_proto_example.jpg" class="figure-img img-fluid rounded" alt="Paper prototype example">
                <figcaption class="figure-caption mb-2">Paper Prototype Examples</figcaption>
            </figure>

            <h5>Lo-fi Testing</h5>
            <h7>
                Validation Targets:
            </h7>
            <ul>
                <li>Navigation</li>
                <li>Information architecture</li>
                <li>The intuitiveness of the “scene” and “routine” features</li>
            </ul>
            <p>
                We wrote a task list that covered the relevant use cases and created questions for participants based on Nielsen’s Usability Heuristics. I adapted a script and consent forms from “Rocket Surgery Made Easy” materials. Test participants were recruited and were tested in person with the "think aloud" method.
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
                    The second iteration of the prototype was made using Sketch(with the Craft plugin) and InVision. We fleshed out the feature implementations, enhanced the prototype's visual design, and made changes according to our findings in the lo-fi testing.
                </p>
                <p>
                    You can view the <a href="https://invis.io/FQQR4C89EW3">full InVision prototype here.</a>
                </p>

                <figure class="figure  w-75">
                    <img src="<?=URL_MEDIA?>ohana/collage_2.png" class="figure-img img-fluid rounded" alt="Hi-fi Prototype">
                    <figcaption class="figure-caption mb-2">Hi-Fi Prototype</figcaption>
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
                        Turned the sidenav into a settings page with a gear icon, giving users a better idea of what it contained.
                    </li>

                    <li>
                        Added a process for adding widgets to the favorites page.
                    </li>
                </ul>
            </div>

            <h5>Hi-fi Testing</h5>

            <p>
                We tested the hi-fi prototype with Morae and other screen/audio recording tools. I adapted versions of materials from the lo-fi testing, added tasks related to new implementations of features, and we used the same procedures. Our goal was to validate the changes we made from the lo-fi prototype.
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
                    Navigation between data pages was inconsistent and unintuitive
                </li>
            </ul>


            <h5>Result</h5>
            <p>
                Our final product for the class project was the hi-fi prototype along with the insights we gained from testing it, so we've only iterated once...so far.
            </p>

            <h7>
                But if we did a second iteration, the next changes we'd seek to make and validate would be to:
            </h7>
            <ul>

                <li>
                    Better convey the meaning and function of the "routine" feature to users
                </li>
                <li>
                    Clarify the process for setting the state of devices in a routine (e.g. specifying what temperature your "Bedtime" routine should set the thermostat to).
                </li>
                <li>
                    Make the filter look more clickable and more noticeable
                </li>
                <li>
                    Position “Back,” “Done,” and “Cancel” buttons in a more consistent way, so that users can expect what the buttons will do.
                </li>
                <li>
                    Add “Back” buttons to Data pages (oops!)
                </li>
            </ul>

            <p>
                This project will always be close to my heart because it was extremely fun to make; and was the first time that I made scripts and task lists, ran a user test (in a lab with a one way mirror!), and converted qualitative user data into actionable goals. I'd already been exposed to design principles, but implementing these fundamental UX research principles gave me a fuller, more exciting picture of what it meant to be a UXer.
            </p>

        </section>


    </main><!-- /.container -->

<?php
    require_once PATH_INC . "footer.inc.php";
?>