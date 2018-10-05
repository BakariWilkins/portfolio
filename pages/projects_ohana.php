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
                <h1 class="jumbotron-heading">My Projects</h1>
                <p class="lead">A collection of my work, picked to showcase the different tools and techniques I'm proficient in. Enjoy!</p>
            </div>
        </section>

    </main><!-- /.container -->

<?php
    require_once PATH_INC . "footer.inc.php";
?>