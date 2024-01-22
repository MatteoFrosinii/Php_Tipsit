<?php
require_once("Alunno.php");
$arrayStudenti = [];

for ($i=0; $i < 200_000; $i++) { 
    $nomeAlunno = chr(rand(65,90));
    for ($j=0; $j < rand(5,10); $j++) { 
        $nomeAlunno.=chr(rand(97,122));    
    }

    $cognomeAlunno = chr(rand(65,90));
    for ($j=0; $j < rand(5,10); $j++) { 
        $cognomeAlunno.=chr(rand(97,122));    
    }

    $etaAlunno = rand(5,20);
    
    $arrayStudenti[]=new Alunno($nomeAlunno,$cognomeAlunno,$etaAlunno);
}

$i = 1;

foreach ($arrayStudenti as $alunno){
    echo "Alunno n° ".$i."<br>";
    $i++;
    $alunno->toString();
    echo "<br>";
}