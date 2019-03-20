<?php
    $title = "Unix Tutorial"; /* Title to be shown in tab*/
    $rel_path_home = "../"; /* relative path to the home directory. Ex: "../../ or "" */

    /* Don't change these pls*/
    require_once $rel_path_home . "assets/inc/page_start.inc.php";
    require_once PATH_INC . "head.inc.php";
?>

    <main role="main" class="container">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Unix Tutorial Site</h1>
                <p class="lead"><strong>Skills employed:</strong> Information Architecture, Persona Making, Web Design/Development, Leadership, Project Management</p>

                <p class="lead"><strong>Tools used:</strong> GitHub, HTML, CSS, JS, PHP, PhpStorm, Bootstrap, RealtimeBoard</p>
            </div>
        </section>
        <hr>
        <section>
            <h5>Overview</h5>
            <p>
                Led a 6-person group in creating a 50-page website and design document.
            </p>
            <p>
                This project isn't explicitly UX-focused, but it demonstrates my ability to analyze/organize information, problem-solve, and see a project through from ideation to development.
            </p>

            <div id="siteExamples" class="carousel slide" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#siteExamples" data-slide-to="0" class="active"></li>
                    <li data-target="#siteExamples" data-slide-to="1"></li>
                    <li data-target="#siteExamples" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-75" src="<?=URL_MEDIA?>unix/unix_tutorial.png" alt="Tutorial Page">
                        <div class="carousel-caption d-none d-md-block">
                            <p>Our introductory tutorial page.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-75" src="<?=URL_MEDIA?>unix/unix_home" alt="Home Page">
                        <div class="carousel-caption d-none d-md-block">
                            <p>The homepage.</p>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-75" src="<?=URL_MEDIA?>unix/unix_quiz.png" alt="Quiz Page">
                        <div class="carousel-caption d-none d-md-block">
                            <p>An example quiz page.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#siteExamples" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#siteExamples" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <h5>Leadership</h5>
            <p>
                As the group leader, I delegated tasks, scheduled meetings, and managed deadlines. I also helped resolve some conflicts regarding the differing opinions and priorities about the site's design (mainly a "sidenav vs. topnav" debate). I made sure that everyone's voice was heard while still progressing toward our project objectives in a timely fashion. I troubleshot problems affecting the group such as connecting to our server, accessing our GitHub repository, and setting up our IDEs; I and another group member then made instruction manuals for the group that addressed those problems.
            </p>


            <h5>Design Document Phase</h5>
            <p>
                I facilitated the group's initial brainstorming sessions, where we decided our target audiences and the ways in which we wanted to serve them. I then created our personas by thinking about those goals and demographics and incorporating them into narratives and use cases. I also developed our vision into a cohesive website by compiling a list of the group's ideas and making them into an affinity diagram. This laid the foundation for our information architecture going forward.
            </p>

            <div id="affinityChart" class="carousel slide" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#affinityChart" data-slide-to="0" class="active"></li>
                    <li data-target="#affinityChart" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-75 pb-4" src="<?=URL_MEDIA?>unix/idea_board.jpg" alt="Idea Board">
                        <div class="carousel-caption d-none d-md-block">
                            <p>This idea board is the result of our brainstorming sessions.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-75 pb-20" src="<?=URL_MEDIA?>unix/affinity_diagram.jpg" alt="Affinity Diagram">
                        <div class="carousel-caption d-none d-md-block">
                        <p>
                            Affinity chart of the ideas, categorized into "content" and "site features."</p>
                        <p>
                            "Content" formed our information architecture, "site features" formed our initial site requirements.
                        </p>
                    </div>
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
            <h5>Site Building Phase</h5>
            <p>
                I made the nav responsive, did the bulk of the PHP, and streamlined the development process by making a page template in PHP. I also assisted our designer with CSS debugging and with some decisions about the color scheme, page layout, and logo.
            </p>
            <h5>Result</h5>
            <p>
                From start to finish, the project lasted 10 weeks, and we completed our objectives under deadline. We gave a presentation on our site; gave a short walkthrough of our work process; and received positive feedback, particularly in the areas of visual design and accessibility.
            </p>

        </section>


    </main><!-- /.container -->


<?php
    require_once PATH_INC . "footer.inc.php";
?>