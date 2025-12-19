<?php
spl_autoload_register(function ($class) {
    include "classes/" . $class . ".php";
});
$days = [new Day(1, "Montag", [1], 'MorgenInhalt', 'NachmittagsInhalt', 4),
        new Day(2, "Dienstag", [2], 'MorgenInhalt', 'NachmittagsInhalt', 4),
        new Day(3, "Mittwoch", [3], 'MorgenInhalt', 'NachmittagsInhalt', 4),
        new Day(4, "Donnerstag", [4], 'MorgenInhalt', 'NachmittagsInhalt', 4),
        new Day(5, "Freitag", [1], 'MorgenInhalt', 'NachmittagsInhalt', 4),
];
$week = new Week(1, $days, 'Rolf Haeckel', "Bemerkung", 4, new Datetime("2025-12-15"));
//$woche = new Woche(51, $tage, 'Bemerkung', 'Thema');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Klassenbuch</h1>
Thema:<select name="Thema" >
    <option value="1">Thema 1</option>
    <option value="2">Thema 2</option>
    <option value="3">Thema 3</option>
    <option value="4">Thema 4</option>
    <option value="5">Thema 5</option>
</select> <br>
Kalenderwoche: <input type="text" value="<?php echo $week->getCalenderWeek() ?>">
Dozent: <input type="text" value="<?php echo $week->getTeacher() ?>">
<table>
    <tr>
        <th>Tag</th>
        <th>Datum</th>
        <th>Inhalt Morgens</th>
        <th>Inhalt Nachmittags</th>
        <th>Unterrichtsart</th>
    </tr>
    <?php
    $days = $week->getDays();
    foreach ($days as $day) {
        echo '<tr> <td><input type="text" value="' . $day->getDayOfWeek() . '"></td>';
        echo '<td><input type="text" value="' . $day->getDate($week->getMonday()) . '"></td>';
        echo '<td> <input type="text" value="' . $day->getAmContent() . '"></td>';
        echo '<td> <input type="text" value="' . $day->getPmContent() . '"></td>';
        echo '<td><input type="checkbox" name="lectureMethod" id="1" value="1" /><label for="1">Frontalunterricht</label><br>
    <input type="checkbox" name="lectureMethod" id="2" value="2" /><label for="2">Projektarbeit</label><br>
    <input type="checkbox" name="lectureMethod" id="3" value="3" /><label for="3">Gruppenarbeit</label><br>
    <input type="checkbox" name="lectureMethod" id="4" value="4" /><label for="4">Selbstlernphase</label><br></td></tr>';
    }
    ?>
</table>
Bemerkung: <input type="text" value="<?php echo $week->getRemark() ?>">
<input type="submit">
</body>
</html>