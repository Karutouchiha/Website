<!-------------------
-Name: Sarah Haböck -
-Datum: 04.06.2021  -
--------------------->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    <link href="Design.css" type="text/css" rel="stylesheet">
</head>
<body>
<nav class="nav">
    <img class="icon" src="Icons/logo_weiß.png" width="30" height="30">
    <a href="Home.php">Home</a>
    <a href="Info.php">Info</a>
    <a href="Uebersicht.php">Übersicht</a>
    <a href="Aktuelles.php">Aktuelles</a>
    <a href="Kontakt.php">Kontakt</a>
    <a href="Download.php">Download</a>
    <a target="_blank" href="https://www.google.at/maps/place/H%C3%B6here+technische+Bundeslehranstalt+Wels/@48.1576267,14.0295437,17z/data=!4m2!3m1!1s0x0000000000000000:0x70f97841b0945b1c">Lage</a>
</nav>
<article id="kontaktinfo">
    <h2>Kontaktdaten</h2>
    <h3>Manager</h3>
    <p>
        <strong>DieSachbearbeiter</strong><br>
        Choriner Straße 49<br>
        10435 Berlin<br>
        E-Mail: <a href="mailto:webmaster@example.com">moinsen2@blindtextgenerator.com</a><br>
    </p>
    <h3>Firma</h3>
    <p>
        <strong>DieSachbearbeiter</strong><br>
        Choriner Straße 49<br>
        10435 Berlin<br>
        E-Mail: <a href="mailto:webmaster@example.com">webmaster@example.com</a><br>
    </p>

</article>
<article class="sidebox">
    Bitte ausfüllen
    Empfänger:
    <form method="post">
        <input type="radio" name="to" id="Manager" value="sarah.haboeck@gmx.at">
        <label for="Manager">moinsen2@blindtextgenerator.com</label>
        <br>
        <input type="radio" name="to" id="Firma" value="webmaster@example.com">
        <label for="Firma">webmaster@example.com</label>
        <br><br>
        Betreff:<br>
        <input type="text" name="sub"><br><br>
        Text:<br>
        <textarea name="message" placeholder="Schreiben sie hier ihre Nachricht" rows="4" cols="40"></textarea>
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>

<?php

if (!$_POST==""){
    if (isset($_POST['to'])){
        if (!$_POST['sub']==""){
            if (!$_POST['message']==""){
                mail($_POST['to'],$_POST['sub'],$_POST['message']);
            }else{
                echo"Sie haben keinen Nachricht eingegeben!";
            }
        }
        else{
            echo "Sie haben keinen Betreff angegeben";
        }
    }
    else{
        echo "Sie keinen Empfänger gewählt!";
    }
}
?>
</article>
<article class="sidebox">
    <h2>Impressum</h2>
    <p>
        <b>Lorem ipsum</b> dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
        magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
        gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing
        elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos
        et accusam et justo duo dolores <b>et ea rebum. Stet</b> clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
        dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
        labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
    </p>
    <p>
        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
        feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
        augue duis dolore te <b>feugait</b> nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
    </p>
    <p>
        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
        consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse.
    </p>
</article>
</body>
</html>
