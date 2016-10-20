<?php
// example of how to use basic selector to retrieve HTML contents
include('simple_html_dom.php');
 
// get DOM from URL or file
$html = file_get_html('http://localhost/craw/teste.html');
$array1 = array();
$array2 = array();
$array3 = array();
$array4 = array();
$array5 = array();
// find all link
//foreach($html->find('div.prateleira a') as $e) 
 //   echo $e->href . '<br>';

// find all image with full tag
foreach($html->find('div.prateleira li img') as $e)
    $array1[] = $e->outertext . '<br>';
	
// find all div tags with id=gbar
foreach($html->find('div.prateleira article.prod-info p.nome') as $e)
    $array2[] =  $e->innertext . '<br>';
	
	// find all div tags with id=gbar
foreach($html->find('div.prateleira article.prod-info p.preco') as $e)
    $array3[] =  $e->innertext . '<br>';
	
		// find all div tags with id=gbar
foreach($html->find('div.prateleira article.prod-info p.descricao') as $e)
    $array4[] =  $e->innertext . '<br>';
	
		// find all div tags with id=gbar
foreach($html->find('div.prateleira article.prod-info p.categoria') as $e)
    $array5[] =  $e->innertext . '<br>';

	var_dump($array2);
	var_dump($array3);
	
	echo $array1[0];
	echo $array2[0];
	echo $array3[0];
	echo $array4[0];
	echo $array5[0];
	
	echo $array1[1];
	echo $array2[1];
	echo $array3[1];
	echo $array4[1];
	echo $array5[1];
	
	echo $array1[2];
	echo $array2[2];
	echo $array3[2];
	echo $array4[2];
	echo $array5[2];
// find all span tags with class=gb1
//foreach($html->find('span.gb1') as $e)
//    echo $e->outertext . '<br>';

// find all td tags with attribite align=center
//foreach($html->find('td[align=center]') as $e)
//    echo $e->innertext . '<br>';
    


// extract text from HTML
//echo $html->plaintext;
?>