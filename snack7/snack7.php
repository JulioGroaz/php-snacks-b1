<?php
$filePath = __DIR__ . '/array.php';
$alunni = include $filePath;

foreach ($alunni as $alunno) {
    $nome = $alunno['nome'];
    $cognome = $alunno['cognome'];
    $voti = $alunno['voti'];
    $mediaVoti = array_sum($voti) / count($voti);
                    
    echo "Nome: $nome, Cognome: $cognome, Media dei voti: " . number_format($mediaVoti, 2) . "<br>";
}
?>