<?php
error_reporting( E_ALL & ~E_NOTICE);
$answers = array("3", "2", "1");
$answer1 = "";
$answer2 = "";
$answer3 = "";
$response1 = $_POST["question1"];
$response2 = $_POST["question2"];
$response3 = $_POST["question3"];
if (!empty($_POST) && !empty($response1) && !empty($response2) && !empty($response3)){
    if ($response1 === $answers[0]){
        $answer1 = "✔";
    }
    else{
        $answer1 = "❌";
    }
    if ($response2 === $answers[1]){
        $answer2 = "✔";
    }
    else{
        $answer2 = "❌";
    }
    if ($response3 === $answers[2]){
        $answer3 = "✔";
    }
    else{
        $answer3 = "❌";
    }
}
?>

<?php
    $title = "Getting Started Quiz";
    $next_page = "quizzes/os_quiz.php";
    $section = "quizzes";
    $rel_path_home = "../../";
    require_once $rel_path_home . "assets/php/page_start.php";
    require_once PATH_INC . "head.php";
    require_once PATH_INC . "utilities.php";
?>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Getting Started Quiz</h1>
        <p class="lead">How much of the getting started process do you remember?</p>
    </div>
    <p id="feedback" style="color: red"></p>
    <form method="post" onsubmit="return verify();">
        <ol>
            <li>
                <span style="font-weight: bold">What's the most popular way to access the UNIX command line interface
                from a Windows PC?</span><?= $answer1 ?><br>
                &emsp;<label for="1-1"><input type="radio" id="1-1" name="question1" value="1" <?=($response1 === "1" ? "checked" : "");?>>Through the Windows Command Prompt</label><br>
                &emsp;<label for="1-2"><input type="radio" id="1-2" name="question1" value="2" <?=($response1 === "2" ? "checked" : "");?>>What do you mean? You can't access UNIX through Windows</label><br>
                &emsp;<label for="1-3"><input type="radio" id="1-3" name="question1" value="3" <?=($response1 === "3" ? "checked" : "");?>>Using Putty</label><br>
            </li>

            <li>
                <span style="font-weight: bold">How can you access the UNIX command line interface from a Mac?</span><?= $answer2 ?><br>
                &emsp;<label for="2-1"><input type="radio" id="2-1" name="question2" value="1" <?=($response2 === "1" ? "checked" : "");?>>Using Putty</label><br>
                &emsp;<label for="2-2"><input type="radio" id="2-2" name="question2" value="2" <?=($response2 === "2" ? "checked" : "");?>>Typing 'ssh [hostname]' in the command line</label><br>
                &emsp;<label for="2-3"><input type="radio" id="2-3" name="question2" value="3" <?=($response2 === "3" ? "checked" : "");?>>Using MobaXterm</label><br>
            </li>

            <li>
                <span style="font-weight: bold">What happens if you type your username wrong when trying to ssh using Putty?</span><?= $answer3 ?><br>
                &emsp;<label for="3-1"><input type="radio" id="3-1" name="question3" value="1" <?=($response3 === "1" ? "checked" : "");?>>You have to close Putty and open it again</label><br>
                &emsp;<label for="3-2"><input type="radio" id="3-2" name="question3" value="2" <?=($response3 === "2" ? "checked" : "");?>>It prevents you from logging in for 5 minutes</label><br>
                &emsp;<label for="3-3"><input type="radio" id="3-3" name="question3" value="3" <?=($response3 === "3" ? "checked" : "");?>>It asks for a valid username</label><br>
            </li>
        </ol>
        &emsp;<input type="submit">
    </form>
    <?php
    require_once PATH_INC . "next.php";
    ?>

</main><!-- /.container -->


<?php
    require_once PATH_INC . "footer.php";
?>