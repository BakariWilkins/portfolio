<?php
    $title = "Home";
    $rel_path_home = "";
    require_once $rel_path_home . "assets/inc/page_start.inc.php";
    require_once PATH_INC . "head.inc.php";
?>


<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" id="hero">
        <div class="container">
            <h1 class="display-3">Hello! I'm Bakari.</h1>
            <p>I'm a UXer focused on discovering, understanding, and fulfilling the needs of users.</p>
            <p>I'm looking for a Spring or Summer 2019 co-op in UX Research, Product Design, or similar.</p>
            <p><a class="btn btn-primary btn-lg" href="<?= URL_PAGES ?>projects.php" role="button">My Projects &raquo;</a></p>
            <p><a class="btn btn-primary btn-lg" href="<?= URL_PAGES ?>resume.php" role="button">My Resumé &raquo;</a></p>
            <p><a class="btn btn-primary btn-lg" href="<?= URL_PAGES ?>about.php" role="button">My Self &raquo;</a></p>

        </div>
    </div>


</main>

<?php
    require_once PATH_INC . "footer.inc.php";
?>
