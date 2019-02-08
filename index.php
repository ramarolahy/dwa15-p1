<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./styles/styles.css">
    <title>DWA15 - Project 1</title>

</head>
<?php
// I would have put this on a separate file but it is too small
$quotes = array(
    "\"Be yourself; everyone else is already taken.\"<br> ― Oscar Wilde",
    "\"Be the change that you wish to see in the world.\"<br> ― Mahatma Gandhi",
    "\"No one can make you feel inferior without your consent.\"<br> ― Eleanor Roosevelt"
);
// Get random quote key
$randQuoteKey = array_rand($quotes);
?>
<body class="my-5">
<div class="container">
    <div class="card mx-auto bg-light">
        <div class="card-body">
            <h1 class="card-title text-center text-dark">Mbinintsoa "Ram" Ramarolahy</h1>
        </div>
        <div class="card-body py-3 pt-3">
            <img src="./img/me.jpg" class="card-img-top rounded" alt="...">
        </div>
        <div class="card-body">
            <h4 class="card-title">About me</h4>
            <p class="card-text">Hello everyone!
                My name is Mbinintsoa Ramarolahy, you can call me <b>Ram</b> for short. I live in Colorado Springs, CO.
                My background is in HR, Retail Management, and Banking but I am working on switching to UX Design and
                Software Dev since this has always been my dream.
                I received my BS Degree in Engineering Management from the US Air Force Academy and I am now pursuing a
                Web Technologies Certificate from HES (Hopefully continuing to a Masters in Digital Media Design).

                <br> I chose to register for this course due to PHP's dominance in the web industry. I just took intro
                to JS and Fund of Web Dev last semester which I enjoyed. I am excited to learn PHP with everyone!

                <br><br>Ram.</p>
        </div>
        <div class="card-body">
            <h4 class="card-title">Random Quote</h4>
            <div class="card py-3 quote">
                <?php
                echo "<h2 class='text-center'> $quotes[$randQuoteKey]</h2>"
                ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
