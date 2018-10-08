<?php
    $title = "About"; /* Title to be shown in tab*/
    $rel_path_home = "../"; /* relative path to the home directory. Ex: "../../ or "" */

    /* Don't change these pls*/
    require_once $rel_path_home . "assets/inc/page_start.inc.php";
    require_once PATH_INC . "head.inc.php";
?>

    <main role="main" class="container">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">About Me</h1>
            </div>
        </section>
        <hr>
        <section>
            <h5>Professional Interests</h5>
            <p>
                I love UX because I love discovering and implementing ways to make people's lives better. In order to do that, my team and I need to understand where pain points lie. I want to play the role of promoting and acting on that understanding.
            </p>
            <p>
                I also love UX because I love working to understand and communicate with different perspectives; Communicating UX considerations to project stakeholders of varied backgrounds allows me to do that.
            </p>
            <p>
                I'm interested in eventually going into UX Research, Product Design, or HCI for emerging interfaces like spatial computing, e-paper, and AR/VR.
            </p>

            <h5>My Inspirations</h5>
            <p>
                Google's ATAP group, the Disney Research Labs, and the Cooper Hewitt Museum were the things that initially sparked my interest in interaction design. From there I realized that I wanted to understand how and why users interact with technology, which led me to the Human-Centered Computing program at RIT, and led me to UX.
            </p>

            <h5>Favorites</h5>
            <ul>
                <li>Favorite prototyping tool: Sketch</li>
                <li>Favorite evaluation tool: Contextual Inquiry</li>
                <li>Favorite typeface: Akzidenz-Grotesk</li>
                <li>Favorite philosophical topics: Epistemology, objectivity, and compatibilism</li>
                <li>Favorite sport: Ultimate Frisbee</li>
                <li>Favorite song: "Don't Panic" by Coldplay</li>
                <li>Favorite method of transportation: Rollerblading</li>
                <li>Favorite "Magic: The Gathering" card: Guttersnipe</li>
                <li>Favorite D&D Player Character: My Half-Elf Pact of the Chain Great Old One Warlock</li>
                <li>Favorite person: You, for reading all of this!</li>
            </ul>
        </section>

    </main><!-- /.container -->

<?php
    require_once PATH_INC . "footer.inc.php";
?>