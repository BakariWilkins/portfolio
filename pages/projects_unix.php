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
                <p class="lead"><strong>Skills employed:</strong> Leadership, Collaboration, Information Architecture, Interaction Design</p>

                <p class="lead"><strong>Tools used:</strong> GitHub, HTML, CSS, JS, PHP, PhpStorm, RealtimeBoard, Bootstrap</p>
            </div>
            <hr>
        </section>
        <section>
            <p>
                Our 6-person group, named Thunderfox, was tasked with creating a 50-page website and an accompanying design document. I was the group's leader, did the bulk of the information architecture and back end. I also helped with graphic design, interaction design, and debugging.
            </p>
            <p>
                As the group leader, I delegated tasks, scheduled meetings, and managed deadlines. I also helped resolve some conflicts regarding the differing opinions and priorities about the site's design (mainly a "sidenav vs. topnav" debate). As an effective communicator, I made sure that everyone's voice was heard while meeting our project objectives and deadlines. I troubleshot problems affecting the group such as connecting to our server, accessing our GitHub repository, and setting up our IDEs; I and another group member then made instruction manuals for the group that addressed those problems.
            </p>


            <p>
                During the design doc phase, I facilitated the group's initial brainstorming sessions, where we decided our target audiences and the ways in which we wanted to serve them. I then created our personas by thinking about those goals and demographics and incorporating them into narratives and use cases. I also developed our vision into a cohesive website by compiling a list of the group's ideas and making them into an affinity diagram. This laid the foundation for our information architecture going forward.
            </p>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?=URL_MEDIA?>unix/idea_board.jpg" alt="Idea Board">
                        <div class="carousel-caption d-none d-md-block">
                            <p>This idea board is the result of our brainstorming sessions.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?=URL_MEDIA?>unix/affinity_diagram.jpg" alt="Affinity Diagram">
                        <div class="carousel-caption d-none d-md-block">
                        <p>
                            I made an affinity chart out of the ideas and categorized them into content or site features. </p>
                        <p>
                            The content portion formed the basis for the rest of our Information Architecture, and the site features portion formed our initial site requirements.
                        </p>
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <p>
                During the website phase, I made the nav responsive, did the bulk of the PHP, and streamlined the development process by making a page template in PHP. I also assisted our designer with some design decisions and CSS debugging.
            </p>
            <p>
                From start to finish, the project lasted 10 weeks, and we completed our objectives under deadline. We gave a presentation on our site; gave a short walkthrough of our work process; and received positive feedback, particularly in the areas of visual design and accessibility.
            </p>

        </section>


    </main><!-- /.container -->


<?php
    require_once PATH_INC . "footer.inc.php";
?>