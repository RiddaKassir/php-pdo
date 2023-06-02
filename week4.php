<?php
for ($i = 0; $i <= 50; $i++) {
    echo $i . "<br>";
}
?>

<?php
$klasgenoten = ["Jan", "Piet", "Klaas", "Marie", "Lotte", "Emma", "Daan", "Sophie", "Ruben", "Lisa"];

foreach ($klasgenoten as $naam) {
    echo $naam . "<br>";
}
?>

<?php
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

$aantalMaanden = count($maanden);
for ($i = 0; $i < $aantalMaanden; $i++) {
    echo 'Maand ' . ($i + 1) . ' is ' . $maanden[$i] . '.<br />';
}
?>

<?php
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

$maandNummer = 1;
foreach ($maanden as $maand) {
    echo 'Maand ' . $maandNummer . ' is ' . $maand . '.<br />';
    $maandNummer++;
}
?>