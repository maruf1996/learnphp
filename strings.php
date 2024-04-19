<?php

// {string uppercase lowercase}

// $str='we love our country';
// echo $str, '</br>';
// echo strtoupper($str), '</br>';
// echo strtolower($str), '</br>';
// echo ucfirst($str), '</br>';
// echo lcfirst($str), '</br>';
// echo ucwords($str), '</br>';


// {string length & count }

// $str='we love our country';
// echo strlen($str);
// echo str_word_count($str);

// echo '<pre>';
// echo print_r(str_word_count($str,1));
// echo print_r(str_word_count($str,2));
// echo '</pre>';

// echo substr_count($str,'country');


// {string replace function }

// $str='We Love Our Country, Our Country in World Best Country.';
// echo str_replace('Country','City',$str);

// $find=['Our','Country','Best'];
// $replace=['My','City','Awesome'];
// echo str_replace($find,$replace,$str);


// $colors=['red','Green','blue'];
// echo '<pre>';
//     // print_r(str_replace('green','yellow',$colors));
//     print_r(str_ireplace('green','yellow',$colors));
// echo '/<pre>';


// echo substr_replace($str,'Test',5, -1);

// echo strtr($str,'WCu','ucu');


// {striong explode implode }

// $str='We Love PHP. We Learning PHP Language.';
// $explode=explode(' ', $str);
// print_r($explode);
// echo '<pre>';
// print_r($explode);
// echo '</pre>';

// $arr=array('red','blue','gray','black');
// $implode=implode(' ',$arr);
// echo $implode;
// print_r($implode);

// {string search and found}

// $str='We Love Our Country, Our Country in World Best Country.';
// echo strpos($str,'Country'), '</br>';
// echo strrpos($str,'Country'), '</br>';
// echo stripos($str,'country'), '</br>';
// echo strripos($str,'country');


// {strip tags and wordwrap}

// $str='<h1>We Love PHP. <b>Very</b> <i>much.</i></h1>';
// echo $str;
// echo strip_tags($str);
// echo strip_tags($str, '<h1></h1>,<i></i>');

// $str='We Love Our Country.';
// echo wordwrap($str,1,'</br>');
// echo wordwrap($str,1,'</br>',true);

// {substr function}
// $str='We Love Our Country.';
// echo substr($str, 3);
// echo substr($str, -8);
// echo substr($str,0,7);

// {str split & chunk split}
// $str='We Love Our Country.';
// $arr=str_split($str);
// $arr=str_split($str,3);
// echo '<pre>';
// print_r($arr);
// echo '</pre>';

// echo chunk_split($str,1,'...');
// echo chunk_split($str,1,'/');
// echo chunk_split($str,1,'</br>');

// {html entity}
// $str='&lt;a href=&quot;https://www.anahian.com&quot;&gt;anahian.com&lt;a&gt;';

// echo $str;
// echo html_entity_decode($str);

// $str1='<a href="https://www.anahian.com">anahian.com<a>';
// echo htmlentities($str1);

?>