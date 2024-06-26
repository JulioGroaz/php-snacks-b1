
<?php
// Array delle partite di basket
$partite = [
    [
        "squadra_casa" => "Olimpia Milano", 
        "squadra_ospite" => "Cantù", 
        "punti_casa" => 55, 
        "punti_ospite" => 60
    ],
    [
        "squadra_casa" => "Virtus Bologna", 
        "squadra_ospite" => "Reyer Venezia", 
        "punti_casa" => 75, 
        "punti_ospite" => 70
    ],
    [
        "squadra_casa" => "Pallacanestro Varese", 
        "squadra_ospite" => "Fortitudo Bologna", 
        "punti_casa" => 85, 
        "punti_ospite" => 80
    ],
    [
        "squadra_casa" => "Dinamo Sassari", 
        "squadra_ospite" => "Pallacanestro Trieste", 
        "punti_casa" => 90, 
        "punti_ospite" => 85
    ],
];
//Stampato in pagina come da consegna ogni elemento dell'array partite che le relative caratteristiche.
foreach ($partite as $partita) {
    echo $partita["squadra_casa"] . " - " . $partita["squadra_ospite"] . " | " . $partita["punti_casa"] . "-" . $partita["punti_ospite"] . "<br>";
}
?>
