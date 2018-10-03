<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$title?> | Wilkins Portfolio</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=$rel_path_home?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=$rel_path_home?>assets/css/jumbotron.css" rel="stylesheet">
    <?php
        if($title == ('Projects'||'Ohana'||'Unix Tutorial')){
            echo "<link href=\"" . $rel_path_home . "assets/css/projects.css\" rel=\"stylesheet\">";
        }
    ?>
    <link href="<?=$rel_path_home?>assets/css/style.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" id="head" href="<?=URL?>">
        <img id="headshot" src="<?=$rel_path_home?>assets/media/bakari_photo.png">
    </a>
    <a class="navbar-brand" href="<?= URL ?>">Bakari Wilkins</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?= ($title == 'Home') ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= URL ?>">Home<span class="sr-only">(current)</span></a>
                </li>
    <!--            <li class="nav-item --><?//= ($title == 'Projects') ? 'active' : ''; ?><!--">-->
    <!--                <a class="nav-link" href="--><?//= URL_PAGES ?><!--projects.php">Projects</a>-->
    <!--            </li>-->
                <li class="nav-item dropdown <?= (($title == 'Projects') || ($title == 'Ohana') || ($title == 'Unix Tutorial')) ? 'active' : ''; ?>">
                    <a class="nav-link dropdown-toggle ac" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" >
                        Projects
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item <?= ($title == 'Projects') ? 'active' : ''; ?>" href="<?= URL_PAGES ?>projects.php" >All Projects</a>
                        <a class="dropdown-item <?= ($title == 'Ohana') ? 'active' : ''; ?>" href="<?= URL_PAGES ?>projects_ohana.php" >Ohana</a>
                        <a class="dropdown-item <?= ($title == 'Unix Tutorial') ? 'active' : ''; ?>" href="<?= URL_PAGES ?>projects_unix.php">Unix Tutorial</a>
                    </div>
                </li>
                <li class="nav-item <?= ($title == 'Resumé') ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= URL_PAGES ?>resume.php">Resumé</a>
                </li>
                <li class="nav-item <?= ($title == 'About') ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= URL_PAGES ?>about.php">About Me</a>
                </li>

            </ul>

    </div>
</nav>
