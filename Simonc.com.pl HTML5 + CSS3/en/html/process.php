<?php
if(isset($_POST['submit'])) {
   $to = 'spiechowicz@simonc.com.pl' ;     //WPISZ TU SWOJ EMAIL
   $subject = 'Zapytanie z simonc.com.pl';   //WPISZ TU TEMAT WIADOMOSCI
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $message = "<table><tr><td>Firma</td><td>".$_POST['firm']."</td></tr>
			   <table><tr><td>Nazwisko</td><td>".$_POST['name']."</td></tr>
               <tr><td>E-Mail</td><td>".$_POST['email']."</td></tr>
               <tr><td>Telefon</td><td >".$_POST['contact']."</td></tr>
               <tr><td>Wiadomosc</td><td>".$_POST['message']."</td>
               </tr></table>" ;
   mail($to, $subject, $message, $headers);
   header('Location: zapytanie_ofertowe.html'); //TUTAJ MASZ WPISAC JAK NAZYWA SIE PLIK TWOJEJ STRONY, NP. kontakt.html

   
}


?>
