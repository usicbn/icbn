<?php

if( ! ini_get('date.timezone') )
{
    date_default_timezone_set('GMT');
}

$fajr = explode(",","0,4:26,4:28,4:30,4:31,4:32,4:34,4:35,4:36,4:38,4:39,4:40,4:42,4:43,4:43,4:44,4:47,4:48,4:49,4:51,4:52,4:53,4:55,4:56,4:57,4:58,4:59,5:01,5:02,5:02,5:03,5:06,0");
$fajr_iqama = explode(",","0,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:30,5:30,5:30,5:30,5:30,5:30,5:30,5:30,5:30,5:30,5:30,5:30,0");
$sunrise = explode(",","0,5:52,5:54,5:55,5:56,5:57,5:58,5:59,6:00,6:01,6:02,6:03,6:04,6:05,6:05,6:06,6:08,6:09,6:10,6:11,6:12,6:13,6:14,6:14,6:15,6:16,6:17,6:18,6:19,6:19,6:20,6:22,0");
$zuhur = explode(",","0,1:03,1:03,1:03,1:02,1:02,1:02,1:02,1:02,1:02,1:02,1:02,1:01,1:01,1:01,1:01,1:01,1:00,1:00,1:00,1:00,12:59,12:59,12:59,12:59,12:58,12:58,12:58,12:57,12:57,12:57,12:57,0");
$zuhur_iqama = explode(",","0,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,0");
$asr = explode(",","0,6:04,6:03,6:02,6:02,6:01,6:00,5:59,5:58,5:58,5:57,5:56,5:55,5:54,5:54,5:53,5:51,5:50,5:49,5:48,5:47,5:46,5:45,5:44,5:43,5:42,5:41,5:39,5:38,5:38,5:37,5:35,0");
$asr_iqama = explode(",","0,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,0");
$maghrib = explode(",","0,8:12,8:10,8:08,8:07,8:06,8:05,8:04,8:02,8:01,8:00,7:59,7:57,7:56,7:56,7:55,7:52,7:50,7:49,7:48,7:46,7:45,7:43,7:42,7:40,7:39,7:37,7:35,7:34,7:34,7:32,7:29,0");
$isha = explode(",","0,9:40,9:37,9:36,9:34,9:32,9:31,9:29,9:28,9:26,9:24,9:23,9:21,9:19,9:19,9:18,9:14,9:13,9:11,9:09,9:07,9:06,9:04,9:02,9:00,8:58,8:57,8:55,8:53,8:53,8:51,8:48,0");
$isha_iqama = explode(",","0,9:45,9:45,9:45,9:45,9:45,9:30,9:30,9:30,9:30,9:30,9:30,9:30,9:30,9:30,9:30,9:30,9:30,9:30,9:30,9:00,9:00,9:00,9:00,9:00,9:00,9:00,9:00,9:00,9:00,9:00,9:00,0");

if(date("m") == 10){ 
$fajr = explode(",","0,05:38,05:39,05:40,05:41,05:42,05:43,05:44,05:45,05:46,05:47,05:48,05:49,05:51,05:52,05:53,05:54,05:55,05:56,05:57,05:58,05:59,06:00,06:01,06:02,06:03,06:04,06:05,06:06,06:07,06:08,06:09,0");
$fajr_iqama = explode(",","0,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:30,6:30,6:30,6:30,6:30,6:30,6:30,6:30,6:30,6:30,6:30,6:30,6:30,6:30,6:30,6:45,6:45,0");
$sunrise = explode(",","0,06:51,06:52,06:53,06:54,06:55,06:56,06:58,06:59,07:00,07:01,07:02,07:03,07:04,07:05,07:06,07:07,07:08,07:09,07:10,07:12,07:13,07:14,07:15,07:16,07:17,07:18,07:19,07:21,07:22,07:23,07:24,0");
$zuhur = explode(",","0,12:46,12:46,12:45,12:45,12:45,12:44,12:44,12:44,12:44,12:43,12:43,12:43,12:43,12:42,12:42,12:42,12:42,12:41,12:41,12:41,12:41,12:41,12:41,12:40,12:40,12:40,12:40,12:40,12:40,12:40,12:40,0");
$zuhur_iqama = explode(",","0,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,1:15,0");
$asr = explode(",","0,04:53,04:52,04:50,04:49,04:47,04:46,04:44,04:43,04:42,04:40,04:39,04:37,04:36,04:34,04:33,04:32,04:30,04:29,04:28,04:26,04:25,04:23,04:22,04:21,04:20,04:18,04:17,04:16,04:15,04:13,04:12,0");
$asr_iqama = explode(",","0,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:15,5:00,5:00,5:00,5:00,5:00,5:00,5:00,5:00,5:00,5:00,5:00,5:00,5:00,5:00,5:00,4:45,4:45,0");
$maghrib = explode(",","0,06:39,06:37,06:36,06:34,06:32,06:31,06:29,06:28,06:26,06:24,06:23,06:21,06:20,06:18,06:17,06:15,06:14,06:12,06:11,06:09,06:08,06:06,06:05,06:03,06:02,06:01,05:59,05:58,05:57,05:55,05:54,0");
$isha = explode(",","0,07:54,07:52,07:51,07:49,07:47,07:46,07:44,07:42,07:41,07:39,07:38,07:36,07:35,07:33,07:32,07:30,07:29,07:27,07:26,07:24,07:23,07:22,07:20,07:19,07:18,07:17,07:15,07:14,07:13,07:12,07:11,0");
$isha_iqama = explode(",","0,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,8:00,0");

}

$today = date("j");
$thismonth = date("m");
$thisyear = date("y");

$fajr_time = $fajr[$today];
$array_minutes = explode(":",$fajr_time);
$fajr_iqama_time =  $array_minutes[1]+30;

?>


				
<style>

.prayer{
    background-image:url(images/prayergrey2.png);
	background-position: top right;
	background-repeat:no-repeat;
	width:190px;
	#width:100%;
	height:160px;
	
	float:left;
	padding:67px 0 0 0;
	}
.prayer table{
		font-family:Arial, Helvetica, sans-serif;
}
.prayer table th{
	color:#7C7C64;
	font-size:13px;
	padding:2px 0 2px 5px;
	border:none !important;

}

.prayer table td{
	color:#000;
	font-size:11px;
	padding:2px 2px 2px 5px;

}
.prayer table td span{
	color:#000;
	font-size:11px;
}

.bgwhite{
	background-color:#FFFFFF;
	}
	
	

	
</style>

<div class="prayer">
                  
        <table cellspacing="0" cellpadding="0" border="0" align="center" >
    <tbody>

        <tr>
            <th align="left" width="60">&nbsp;</th>
            <th align="left" width="60">Adhan</th>
            <th align="left">Salat</th>
        </tr>
        <tr class="bgwhite">
            <td align="left">Fajr</td>
            <td align="left"><?=$fajr[$today]?></td>
           <td align="left"><?=$fajr_iqama[$today]?></td>
        </tr>
        <tr>
            <td align="left">Dhuhr</td>
            <td align="left"><?=$zuhur[$today]?></td>
            <td align="left"><?=$zuhur_iqama[$today]?></td>
        </tr>
        <tr class="bgwhite">
            <td align="left">Asr</td>
            <td align="left"><?=$asr[$today]?></td>
            <!--td align="left"><?=$asr_iqama[$today]?></td>-->
			<td align="left">6:30</td>
        </tr>
        <tr>
            <td align="left">Maghrib</td>
            <td align="left"><?=$maghrib[$today]?></td>
            <td align="left">5 min</td>
        </tr>
        <tr class="bgwhite">
            <td align="left">Isha</td>
            <td align="left"><?=$isha[$today]?></td>
            <td align="left"><?=$isha_iqama[$today]?></td>
        </tr>
        <tr>
            <td align="left">Jumaa</td>
            <td align="left"><b>1:10 PM</b></td>
            <td align="left">--</td>
        </tr>
       <TR>
		  <TD  colspan="3" align="center" >
		  <font color=green size="1"><i>Khutba starts at 1:10</i></font>
		  <!--<br><font color="gray" size="1"><i>Last updated on 05/01/2012</i></font>-->
		  <?php
$last_modified = filemtime("includes/rightnav_body.php");
$monthName = date("F",mktime(0,0,0,$thismonth,10));
$previousmonthName = date("F",mktime(0,0,0,$thismonth-01,10));
$nextmonthName = date("F",mktime(0,0,0,$thismonth+01,10));
$nextmonth = date("m",mktime(0,0,0,$thismonth+01,10));
?>
 <br><font color="gray" size="1"><i>Last updated on <?=date("m/j/y h:i", $last_modified)?></i></font>	
		  </TD>
	   </TR>
    </tbody>
</table>


 </div>
                
  <div class="clear"> </div>
		        
  <div> &nbsp;<p></p></div>
			 
<div class="curved-box-rightnav" style="background:#333333" align="center">        
    <!--<h3  style="padding-bottom:0px;">Prayer Schedule</h3> -->
    <p  style="color:#ffffff;text-decoration:none;font-size:small;font-weight:bold;vertical-align:middle">Prayer Schedule</p>

    <table cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;' ><tr>
    <td><img width="25" height="30" src="images/adobe-pdf-document-icon-small.png"/></td>
    <td>

    
        <a href="http://www.usicbn.org/icbn/documents/Schedule<?=$thismonth?><?=$thisyear?>.pdf" style="color:#ffffff;text-decoration:none;font-weight:bold;font-size:small;vertical-align:middle" onMouseOver="this.style.color='#ffffcc'" onMouseOut="this.style.color='#ffffff'" target=new >
    <?=$monthName?> </a>&nbsp;&nbsp;&nbsp;
    <a href="http://www.usicbn.org/icbn/documents/Schedule<?=$nextmonth?><?=$thisyear?>.pdf" style="color:#ffffff;text-decoration:none;font-weight:bold;font-size:small;vertical-align:middle" onMouseOver="this.style.color='#ffffcc'" onMouseOut="this.style.color='#ffffff'" target=new >
    <?=$nextmonthName?></a>
<!--
	    <a href="http://www.usicbn.org/icbn/documents/Ramadan_Calendar2016.pdf" style="color:#ffffff;text-decoration:none;font-weight:bold;font-size:small;vertical-align:middle" onMouseOver="this.style.color='#ffffcc'" onMouseOut="this.style.color='#ffffff'" target=new >
    Ramadan 2016</a>
    -->
	
    </td></tr>
    </table>

</div>

<div> &nbsp;</div>

<script type="text/javascript">

/***********************************************
* Cross browser Marquee II- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

var delayb4scroll=1000 //Specify initial delay before marquee starts to scroll on page (2000=2 seconds)
var marqueespeed=2 //Specify marquee scroll speed (larger is faster 1-10)
var pauseit=1 //Pause marquee onMousever (0=no. 1=yes)?

////NO NEED TO EDIT BELOW THIS LINE////////////

var copyspeed=marqueespeed
var pausespeed=(pauseit==0)? copyspeed: 0
var actualheight=''

function scrollmarquee(){
if (parseInt(cross_marquee.style.top)>(actualheight*(-1)+8)) //if scroller hasn't reached the end of its height
cross_marquee.style.top=parseInt(cross_marquee.style.top)-copyspeed+"px" //move scroller upwards
else //else, reset to original position
cross_marquee.style.top=parseInt(marqueeheight)+8+"px"
}

function initializemarquee(){
cross_marquee=document.getElementById("vmarquee")
cross_marquee.style.top=0
marqueeheight=document.getElementById("marqueecontainer").offsetHeight
actualheight=cross_marquee.offsetHeight //height of marquee content (much of which is hidden from view)
if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1){ //if Opera or Netscape 7x, add scrollbars to scroll and exit
cross_marquee.style.height=marqueeheight+"px"
cross_marquee.style.overflow="scroll"
return
}
setTimeout('lefttime=setInterval("scrollmarquee()",30)', delayb4scroll)
}

if (window.addEventListener)
window.addEventListener("load", initializemarquee, false)
else if (window.attachEvent)
window.attachEvent("onload", initializemarquee)
else if (document.getElementById)
window.onload=initializemarquee


</script>


<div class="curved-box-rightnav" style="background:#333333" align="center">    
<h3 style="color:white; margin:0px; padding:0px" align="center">Announcements</h3>
</div>


<div id="marqueecontainer" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">
<div id="vmarquee" style="position: absolute; width: 95%;">

<!--YOUR SCROLL CONTENT HERE-->

<ul>
 <li class="li-content">Please see <a href="calendar.html" target="calendar" > Monthly Calendar for daily and weekly activities </a></li> 

  <li class="li-content"> Visit <a href="www.chicagohilal.org">www.chicagohilal.org</a> for Islamic Calendar Updates</li><br/>
  <li class="li-content" style="color:red; font-weight:bold;"> Visit <a href="http://icmclean.org">icmclean.org</a> for Future Project updates</li>
  
<!--
 <li class="li-content">
    <a href="http://www.usicbn.org/icbn/documents/Ramadan_Calendar2016.pdf" target=new >
    <img width="15" height="20" src="images/adobe-pdf-document-icon-small.png"/>
    <font color="green">Ramadan Schedule</font></a>
 
 </li> 
-->

</ul><br>


<!--END YOUR SCROLL CONTENT HERE-->

</div>
</div>

<div> &nbsp;</div>

<div align="center">   
    			    <div>
    			        	<a href="http://twitter.com/usicbn"><img src="images/follow_me.png" alt="Follow us on Twitter" /></a>
    			        	<a>&nbsp;</a>
    			            <a href="http://www.facebook.com/usicbn"><img src="images/fb_logo.png" width="120" height="30" alt="Follow us on Facebook" /></a>
    			            <!--<a class="addthis_button_delicious"><img src="images/twitter.png" width="150" height="50" alt="Follow us on Twitter" /></a>-->
							&nbsp;<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fusicbn&amp;send=false&amp;layout=button_count&amp;width=90&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" align="center" allowTransparency="true"></iframe>
							

    			    </div>
</div>						
<div> &nbsp;</div>

<div >
	<!-- Begin MailChimp Signup Form -->
	<link href="http://cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif;  width:270px;}
		/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
		   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
	</style>
	<div id="mc_embed_signup" >
	<form action="http://usicbn.us2.list-manage.com/subscribe/post?u=a2d92a1a10e464c7decc27326&amp;id=56f69e9989" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		<div id="mc_embed_signup_scroll">
		<h3 style="color:grey; margin:0px; padding:0px" align="left">Join Mailing List</h3>

		<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
		<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a2d92a1a10e464c7decc27326_56f69e9989" tabindex="-1" value=""></div>
		<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		</div>
	</form>
	</div>

	<!--End mc_embed_signup-->

</div>

<div align="center">
<a href="http://www.sendaquran.com"><img style="border:none;" src="http://www.bookofsigns.org/images/send_a_quran.gif" /></a>
</div>



			
			




