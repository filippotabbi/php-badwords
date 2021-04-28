<!-- str_replace(porzioneDaModificare, conCosa, stringa) -->
<?php

$string = "Se fossi il fuoco, brucerei il mondo; se fossi il vento, lo colpirei con tempeste; se fossi l'acqua, lo annegherei; se fossi Dio, lo farei sprofondare; <br>
se fossi il papa, allora sarei contento, poiché metterei nei guai tutti i cristiani; se fossi l'imperatore, sai cosa farei? Taglierei a tutti la testa di netto. <br>
Se fossi la morte, andrei da mio padre; se fossi la vita, fuggirei da lui: farei una cosa simile con mia madre. <br>
Se fossi Cecco, come sono e sono sempre stato, prenderei le donne giovani e belle; lascerei agli altri quelle vecchie e brutte." ;

 echo $_GET["word"];
 $badWords = str_replace($_GET["word"], "***", $string);
?>


<h1><?php echo $badWords ?></h1>

<h2>Lunghezza della stringa:  <?php echo strlen($badWords); ?> </h2>
