
<?php
// Array delle partite di basket
$partite = [
    [
        "squadra_casa" => "Olimpia Milano", 
        "squadra_ospite" => "Cantù", 

    ],
    [
        "squadra_casa" => "Virtus Bologna", 
        "squadra_ospite" => "Reyer Venezia", 

    ],
    [
        "squadra_casa" => "Pallacanestro Varese", 
        "squadra_ospite" => "Fortitudo Bologna", 
   
    ],
    [
        "squadra_casa" => "Dinamo Sassari", 
        "squadra_ospite" => "Pallacanestro Trieste", 

    ],
];
//Stampato in pagina come da consegna ogni elemento dell'array partite che le relative caratteristiche. Aggiunto il fatto che vengano creati i punteggi delle partite in maniera randomica. 

foreach ($partite as $partita) {
    $partita["punti_casa"] = rand(0, 100);
    $partita["punti_ospite"] = rand(0, 100);
    echo $partita["squadra_casa"] . " - " . $partita["squadra_ospite"] . " | " . $partita["punti_casa"] . "-" . $partita["punti_ospite"] . "<br>";
}
?>
