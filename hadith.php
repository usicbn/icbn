<?php


$textfile= "./hadith.xml";
$handle = fopen($textfile, "r");
$contents = fread($handle, filesize($textfile));
fclose($handle);
$code = preg_match_all("~<Quran>(.*?)</Quran>~si", $contents, $matches1);
$code = preg_match_all("~<Hadith>(.*?)</Hadith>~si", $contents, $matches2);
$verse = $matches1[1];
$hadith = $matches2[1];
shuffle($verse);
shuffle($hadith);

print "<b>Quran:</b><br>";
foreach ($verse as $b){ 
 	print $b . "<br>";
}
    
print "<b>Hadith:</b><br>";    
foreach ($hadith as $c){ 
 	print $c . "<br>";
}

?>