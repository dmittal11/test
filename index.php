<?php

include_once "simple_html_dom.php";

$dom = file_get_html('http://www.dexel.co.uk/themes/bootstrap/js/bootstrap.js');

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

$scripts = $dom->find('script', 0)->innertext;

$matches = array();
	$matches = preg_split('/(?:)(.*?)(?:")/', $scripts);
	print_r($matches);
	
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













?>