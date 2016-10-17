<?php
$browser  = $_SERVER['HTTP_USER_AGENT']; 
$shadow_class='shadowblur2';
if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        $shadow_class='';
    else
        $shadow_class='shadowblur2';
?>