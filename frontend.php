<?php
spl_autoload_register(function ($class) {
    include "classes/" . $class . ".php";
});
$tage = [new Tag('Montag', "15.12.2025", 'Projektarbeit', "Inhalt", "Rolf Haeckel"),
    new Tag('Dienstag', "16.12.2025", 'Frontalunterricht', "Inhalt", "Rolf Haeckel"),
    new Tag('Mittwoch', "17.12.2025", 'Gruppenarbeit', "Inhalt", "Rolf Haeckel"),
    new Tag('Donnerstag', "18.12.2025", 'Frontalunterricht', "Inhalt", "Rolf Haeckel"),
    new Tag('Freitag', "19.12.2025", 'Selbstlernphase', "Inhalt", "Rolf Haeckel"),
    ];
$woche = new Woche(51, $tage, 'Bemerkung', 'Thema');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Klassenbuch</h1>
<h2>Thema: <input type="text" value=" <?php echo $woche->getThema()?>"></h2>
Kalenderwoche: <input type="text" value="<?php echo $woche->getKalenderWoche() ?>">
<table>
    <tr>
        <th>Tag</th>
        <th>Datum</th>
        <th>Inhalt</th>
        <th>Unterrichtsart</th>
        <th>Dozent(in)</th>
    </tr>
    <?php
    $tage=$woche->getTage();
    foreach ($tage as $tag) {
        echo '<tr> <td>' . $tag->getTag() . '</td>';
        echo '<td><input type="text" value="' . $tag->getDatum() . '"></td>';
        echo '<td> <input type="text" value="' . $tag->getInhalt() . '"></td>';
        echo '<td><input type="text" value="' . $tag->getUnterrichtsart() . '"></td>';
        echo '<td><input type="text" value="' . $tag->getDozent() . '"></td> </tr>';
    }
    ?>
</table>
Bemerkung: <input type="text" value="<?php echo $woche->getBemerkung()?>">
<input type="submit">
</body>
</html>