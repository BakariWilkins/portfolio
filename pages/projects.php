<?php
    $title = "Projects";
    $rel_path_home = "../";
    require_once $rel_path_home . "assets/inc/page_start.inc.php";
    require_once PATH_INC . "head.inc.php";
?>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">My Projects</h1>
      <p class="lead text-muted">This is a collection of some of my work, picked to showcase the different tools and techniques I'm proficient in. Enjoy!</p>
    </div>
  </section>

    <div class="container clearfix">

        <div class="row">
            <div class="card card-body">

                <h6 class="card-header">UNIX Tutorial Site + Design Document</h6>


                <div class="card-body"><div class="d-md-inline-flex">
                    <img src="<?=$rel_path_home?>assets/media/unix_references_thumb.png" class="img-thumbnail"/>

                    <div class="flex-column">
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text">Tools used: PHP, HTML, CSS, JS</p>
                        <a href="#" class="btn btn-primary mt-auto">Go somewhere</a>
<!--                        indvidual projects can have slideshows/carousels w/ screenshots and captioned explanations-->
                    </div>
                </div>

            </div>
        </div>

    </div>

</main>

<?php
    require_once PATH_INC . "footer.inc.php";
?>