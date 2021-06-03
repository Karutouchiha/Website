<!-------------------
-Name: Sarah Haböck -
-Datum: 09.04.2021  -
--------------------->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Terminkalender</title>
    <link href="Haboeck_Uebung13.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php

//Deklaration der Termine
$termin[]= array();
$termin[0]['Datum']=date_create('20201208');
$termin[0]['Ort']="Wels";
$termin[0]['Spiel']="Warcraft awakes";
$termin[1]['Datum']=date_create('20210311');
$termin[1]['Ort']="Wien";
$termin[1]['Spiel']="Monster legends coming";
$termin[2]['Datum']=date_create('20210628');
$termin[2]['Ort']="Linz";
$termin[2]['Spiel']="Starcraft forever";
$termin[3]['Datum']=date_create('20220628');
$termin[3]['Ort']="Graz";
$termin[3]['Spiel']="Doom arising";
$termin[4]['Datum']=date_create('20230628');
$termin[4]['Ort']="Graz";
$termin[4]['Spiel']="Get out of here";

?>
<table>
    <thead>
    <tr>
        <td></td>
        <td>Datum <a href="Haboeck_Uebung13.php?sortierung=du">&uarr;</a> <a href="Haboeck_Uebung13.php?sortierung=dd">&darr;</a></td>
        <td>Spiel <a href="Haboeck_Uebung13.php?sortierung=su">&uarr;</a> <a href="Haboeck_Uebung13.php?sortierung=sd">&darr;</a></td>
        <td>Ort <a href="Haboeck_Uebung13.php?sortierung=ou">&uarr;</a> <a href="Haboeck_Uebung13.php?sortierung=od">&darr;</a></td>
    </tr>
    </thead>
    <?php
    //prüft ob Sortierung gesetzt ist
    if (isset($_GET['sortierung'])){
        //Sortiert die Elemente nach Pfeildruck
        if ($_GET['sortierung'] == "du"){
            array_multisort(array_column($termin, 'Datum'),SORT_ASC,$termin);
        }
        else if ($_GET['sortierung'] == "dd"){
            array_multisort(array_column($termin,'Datum'), SORT_DESC,$termin);
        }
        else if ($_GET['sortierung'] == "su"){
            array_multisort(array_column($termin,'Spiel'), SORT_ASC,$termin);
        }
        else if ($_GET['sortierung'] == "sd"){
            array_multisort(array_column($termin,'Spiel'), SORT_DESC,$termin);
        }
        else if ($_GET['sortierung'] == "ou"){
            array_multisort(array_column($termin,'Ort'), SORT_ASC,$termin);
        }
        else if ($_GET['sortierung'] == "od"){
            array_multisort(array_column($termin,'Ort'), SORT_DESC,$termin);
        }
    }
    ?>
    <tbody>
    <?php
    //initialisier $i mit 1
    $i =1;
    //Baut die Tabelle für die Termine zusammen
    foreach ($termin as $ebene1){
        if ($i%2 == 1){ // prüft ob die Tabellennummer gerade oder ungerade ist
            print "<tr class='odd'>\n";
        }
        else{
            print "<tr class='even'>\n";
        }
        print "<td> $i </td>\n";
        print "<td>";
        datum_deutsch($termin[$i-1]['Datum']);
        print "</td>\n";
        print "<td>";
        print $termin[$i-1]['Spiel'];
        print "</td>\n";
        print "<td>";
        print $termin[$i-1]['Ort'];
        print "</td>\n";
        $i++;
        print "</tr>\n";
    }

    ?>
    </tbody>
</table>
<?php

//gibt das Datum in der deutschen Schreibweise aus
function datum_deutsch($date){
    print date_format($date, 'd.m.Y');
}
?>
</body>
</html>


