<?php

date_default_timezone_set('Europe/London');
        $date = date('d/m/Y h:i:s a', time());
		
		var_dump($date);
		
/*

include_once "simple_html_dom.php";

$file = "js.html";

$current = "<script>\n";

//file_put_contents($file, $current);

//$current .= file_get_contents('http://www.dexel.co.uk/themes/bootstrap/js/bootstrap.js');

$current .= file_get_contents('test.js');

$current .= "\n </script>";

file_put_contents($file, $current);




$dom = file_get_html('http://localhost/test/js.html');

//$dom = str_get_html('http://www.dexel.co.uk/themes/bootstrap/js/bootstrap.js');


// code to access content within html tags... 

 //echo $dom->find('h6[id=h6]',0)->innertext;

 //$scripts = $dom->find('script', 0)->innertext;

//$scripts = $dom->find('script', 0);



//echo $scripts;

/*

while($scripts = $dom->find('script', 0)->innertext){

	$matches = array();
	$matches = preg_split('/(?:)(.*?)(?:")/', $scripts);
	print_r($matches);
	
}
*/

//$scripts = $dom->find('script', 0)->innertext;

//$matches = array();
/*
	$matches = preg_match_single('/var h = (.+);/', $dom);
	var_dump($matches);
	
	#/var allTyres = (.+);/
	
	/*

foreach($scripts as $s){

	$matches = array();
	$matches = preg_split('/(?:)(.*?)(?:")/', $s);
	print_r($matches);
	
}
*/


//echo $dom;



/*

  foreach(($dom->find('div',1)->class = 'fancybox-inner')  as $element){
           print_r($element);
        }
		
		
		/*
	 $scripts = $dom->find('script');
         foreach($scripts as $s) {
         if(strpos($s->innertext, 'allTyres') !== false) {
             $script = $s;
             print_r($script);
         }
		 }
		 */

//print_r($dom);


/*
* preg_match() and return match
*/
function preg_match_single($pattern, $subject) {
   return preg_match($pattern, $subject, $matches) ? end($matches) : null;
}










?>