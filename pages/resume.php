<?php
    $title = "Resumé";
    $rel_path_home = "../";
    require_once $rel_path_home . "assets/inc/page_start.inc.php";
    require_once PATH_INC . "head.inc.php";
?>
    <main role="main" class="container" >
        <a href="<?=$rel_path_home?>assets/media/bakari_wilkins_resume.pdf" class="btn btn-primary btn-lg resume-download" download>Download Resume</a>
        <div class='embed-responsive' style='padding-bottom:150%'>
            <embed src="<?=$rel_path_home?>assets/media/bakari_wilkins_resume.pdf" id="resume" type="application/pdf" width="auto" height="auto"/>
        </div>

        <hr>

    </main>
<?php
    require_once PATH_INC . "footer.inc.php";
?>