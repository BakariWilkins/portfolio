<?php
    $title = "Projects";
    $rel_path_home = "";
    require_once $rel_path_home . "assets/inc/page_start.inc.php";
    require_once PATH_INC . "head.inc.php";
?>


<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" id="hero">
        <div class="container">
            <h1 class="display-3">Hello! I'm Bakari.</h1>
            <p>I love discovering, understanding, and fulfilling user needs.</p>
            <p>I'm looking for a Summer or Fall 2019 co-op in UX Research, Product Design, or UX Design.</p>

            <h4 class="pt-1 pb-1">My Projects:</h4>
            <div class="container clearfix">

                <div class="row">

                    <div class="card card-body">

                        <h6 class="card-header">Ohana Smart Home App</h6>

                        <div class="card-body">
                            <div class="d-md-inline-flex">

                                <img src="<?=$rel_path_home?>assets/media/ohana/ohana_thumb.png" class="img-thumbnail"/>

                                <div class="flex-column project-description">
                                    <p class="card-text"> <strong>Skills employed:</strong> Usability Testing, Lo/Hi-Fi Prototyping, Iteration, Collaboration, Visual Design</p>
                                    <p class="card-text"><strong>Tools used:</strong> Sketch, InVision, Paper prototypes, Morae</p>
                                    <a href="<?=URL_PAGES?>projects_ohana.php" class="btn btn-primary btn-lg mt-auto">See More &raquo;</a>
                                    <!--indvidual projects can have slideshows/carousels w/ screenshots and captioned explanations-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="card card-body">

                        <h6 class="card-header">UNIX Tutorial Site + Design Document</h6>

                        <div class="card-body">
                            <div class="d-md-inline-flex">
                                <img src="<?=$rel_path_home?>assets/media/unix/unix_references_thumb.png" class="img-thumbnail"/>

                                <div class="flex-column project-description">
                                    <p class="card-text"><strong>Skills employed:</strong> Leadership, Information Architecture, Interaction Design, Web Development</p>
                                    <p class="card-text"><strong>Tools used:</strong> GitHub, HTML, CSS, JS, PHP, PhpStorm, Bootstrap, RealtimeBoard</p>
                                    <a href="<?=URL_PAGES?>projects_unix.php" class="btn btn-primary mt-auto btn-lg">See More &raquo;</a>
                                    <!--                        indvidual projects can have slideshows/carousels w/ screenshots and captioned explanations-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</main>

<?php
    require_once PATH_INC . "footer.inc.php";
?>
