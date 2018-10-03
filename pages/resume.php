<?php
    $title = "Resumé";
    $rel_path_home = "../";
    require_once $rel_path_home . "assets/inc/page_start.inc.php";
    require_once PATH_INC . "head.inc.php";
?>
    <main role="main" class="container" >
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Resumé</h1>
            </div>
        </section>
        <a href="<?=$rel_path_home?>assets/media/bakari_wilkins_resume.pdf" class="btn btn-primary btn-lg resume-download mx-auto" download>Download Resume</a>
        <div class='embed-responsive' style='padding-bottom: 125%'>
            <embed src="<?=$rel_path_home?>assets/media/bakari_wilkins_resume.pdf" id="resume" type="application/pdf" width="auto" height="auto"/>
        </div>

    </main>
<?php
    require_once PATH_INC . "footer.inc.php";
?>