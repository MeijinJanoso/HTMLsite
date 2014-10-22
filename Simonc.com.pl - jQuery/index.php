<?php 
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

switch($lang)
{
   case 'pl':
      include('./pl/index.html');       

      break;
   case 'en':
      include('./en/index.html');

   case 'de':
      include('./de/index.html');

	  
      break;
   default:
      include('./en/index.html');   

}

?>