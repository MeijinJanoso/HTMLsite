<?php 
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

switch($lang)
{
   case 'pl':
      include('./pl/pl.html');       

      break;
   case 'en':
      include('./en/en.html');

   case 'de':
      include('./de/de.html');

	  
      break;
   default:
      include('./en/en.html');   

}

?>