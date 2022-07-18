<?php
function izmijeniTekst($neizmjenjeniTekst) {
 //explode PHP funkcijom razdvajamo string u niz
 $rijeci = explode("-", $neizmjenjeniTekst); 
 $izmijenjeneRijeci = "";
 foreach($rijeci as $rijec){
   
 //ucfirst PHP funkcijom pretvaramo prvo slovo 
 //svakog stringa u veliko slovo  
 if($izmijenjeneRijeci == ""){
 $izmijenjeneRijeci .= ucfirst($rijec);
  continue;
 }
   
 $izmijenjeneRijeci .= " " . ucfirst($rijec);
   
 }
  
 return $izmijenjeneRijeci;
}

//na kraju, uz pomoć echo PHP komande, pozivamo funkciju te
//ispisujemo njenu povratnu vrijednost, odnosno izmijenjeni 
//tekst -> Zeforge Zenica
echo izmijeniTekst("zeforge-zenica");
?>