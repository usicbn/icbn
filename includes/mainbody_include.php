 <div class="date" style="text-align:left;"> <script language="JavaScript1.2" src="script/date.js"></script> </div>


<P align="center">
<img width="250" height="50" src="images/bismillah_2.jpg" border="0"><br><font style="font-size:8pt">(In the name of Allah, Most gracious  Most merciful)</font>
</P>




<!--
<p align=justify style="padding: 13px;"> 
<i>
The Islamic Center of Bloomington/Normal is appalled at this mass shooting in Orlando, FL and strongly condem all terror attacks. Our condolences and thoughts are with the families of the victims of this senseless shooting and we pray for the speedy recovery for those that are wounded.<br/>
The loss of innocent lives, especially on a mass scale is devastating to all people of conscience. This kind of violence is inhuman and barbaric and is not justifiable by any religion. The terrorists claiming to believe in our faith are unilaterally distorting the true spirit of Islam. The Quran states <a href="http://www.qtafsir.com/index.php?option=com_content&task=view&id=786&Itemid=60">"He who kills one person kills all humanity."</a>
</i>
</br><br/>
-->

<!--
<center>
<marquee align="center" scrollamount="4" scrolldelay="1" direction="left" width="400" height="20" style="font-family: fantasy, cursive, Serif; font-style:italic; font-weight: 90; color:RED; font-size: 10pt; background-color:#ffffff; ">
Inshallah 1st of Dhul-Hijjah will be on Friday September 26th, Eid Ul Adha will be on Sunday October 5th.
</marquee>
</center>
-->



<style>
.module { position: relative; }
.mod-box {
	padding: 8px;
	border: 0px solid #fff;
	border-radius: 10px;
	background: #ffffff;
	box-shadow:
		0 0 0 1px rgba(0,0,2,0.1),
		0 1px 0 rgba(0,0,2,0.15),
		0 1px 1px rgba(0,0,2,0.1);
	#text-shadow: 0 1px 0 rgba(253,253,255,1.0);
}

.deepest > *:first-child { margin-top: 0; }
.deepest > *:last-child { margin-bottom: 0; }

</style>





<style>
#container1 { overflow: hidden; width: 100%; }

#mainCol { float: left; width: 49%; padding:2px}

#sideCol { float: right; width: 49%; padding:2px  }

</style>

		

<!--
<div class="content clearfix">
      <p><iframe allowfullscreen="" frameborder="0" height="390" src="http://www.youtube.com/embed/Wibr9ztxiEE" title="YouTube video player" width="480"></iframe>
      </p>
</div>
-->

<div id="container1">
    <div id="mainCol" style="width:58%">
	
		<div class="module mod-box  deepest">			
		<h3 style="color:white; margin:0px; background-color:#333333;padding:0px 0px 0px 2px" align="left">ICBN Events Calendar <a href="calendar.html" style="color:white;" targer="new"> (detail view)</a></h3>
		<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;bgcolor=%23D0D9C7&amp;src=2qbfisikm4oajp01vgahfic4q0%40group.calendar.google.com&amp;color=%23D0D9C7&amp;src=icbn.comm%40gmail.com&amp;color=%23D0D9C7&amp;src=icbn.comm%40gmail.com&amp;color=%23D0D9C7&amp;&amp;color=%23D0D9C7&amp;ctz=America%2FChicago" style="border-width: 0pt;" width="100%" height="300" frameborder="0" scrolling="no"></iframe>
		</div>	
    </div>
    <div id="sideCol" style="width:41%;">
		<a class="twitter-timeline" href="https://twitter.com/usicbn" 
		data-tweet-limit="3"
		data-dnt="true"
		data-chrome="noheader noborders transparent nofooter"
		data-link-color="#8e1d08"		
		data-widget-id="625859810152591361">Tweets</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

   </div>	
</div>	


   
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
?>

   <div class="clear"> <p> &nbsp;<br/></p></div>
   <br><br>
   
<div id="container1">
    <div id="mainCol">
					  <h2 style="color:black; margin:0px; background-color:white; padding:1px" align="left">Quran</h3>
					  <hr/>
					  <img src="images/quran_img.jpg" alt="The Holy Quran" width="70" height="60" class="images_left" title="The Holy Quran"/>
					<?=$verse[0]?>

    </div>
    <div id="sideCol">
					<h2 style="color:black; margin:0px; background-color:white; padding:1px" align="left">Hadeeth</h3>
					<hr/>
					<img src="images/hadith_img.gif" alt="Hadith" width="70" height="60" class="images_left" title="Hadith - Sayings of Prophet Mohammed pbuh"/>

					<?=$hadith[0]?>	
    </div>	
</div>	

  <!-- <div id="qq" class="singleRuleDivider" > </div> -->
<!--   
   <div id="content" style="float: left; width: 435px; margin-right: 5px;">
					  <h2 style="color:black; margin:0px; background-color:white; padding:1px" align="left">Quran</h3>
					  <img src="images/quran_img.jpg" alt="The Holy Quran" width="70" height="60" class="images_left" title="The Holy Quran"/>
          <?=$verse[0]?>

   </div>
   <div id="vertLine" > </div>
			
   <div id="content" style="float: left; width: 435px; margin-right: 5px; margin-left: 10px">
					<h2 style="color:black; margin:0px; background-color:white; padding:1px" align="left">Hadeeth</h3>
					<img src="images/hadith_img.gif" alt="Hadith" width="70" height="60" class="images_left" title="Hadith - Sayings of Prophet Mohammed pbuh"/>

 <?=$hadith[0]?>
   </div>
-->
<br>
   <div class="clear"> <p> <br/></p></div>
      <br><br>
	  
<div id="container1">
    <div id="mainCol">
        <h2 style="color:black; margin:0px; background-color:white; padding:1px" align="left">Community Corner</h3>
		<hr/>
		<p> 
	<ul>
	<li>Islamic Will Template <a href="documents/IslamicWillTemplate.docx">download</a></li>
	<li>Where can i buy Halal food? Want to save a trip to Chicago ? - <a target="new" href="http://saveatrip.webs.com/service.htm">Save a Trip!</a></li>
	<li style="color:green">Locally raised Zabiha Halal meat now available! at <a target="new" href="documents/gridleyMeat.pdf">Gridley Meats</a></li>
	<li>
	Make your next move with Realtor Br Mahmood Qatanani
<a target="new" href="http://usicbn.org/icbn/documents/mqrealtor.pdf">See Flyer</a> for more details.
Contact: 309-261-1588; nurandsalaam@gmail.com
	</li>
	<li>
	If you like to advertise your local business, please send us a note.
	</li>
	</ul>
		</p>
    </div>
    
    <div id="sideCol">
        <h2 style="color:black; margin:0px; background-color:white; padding:1px" align="left">Make a Donation</h3>
		<hr/>
        
		<p> 
		<i>All donations to ICBN are Tax Deductible. Our center's activities and its future depends upon your donations today! Please donate generously.</i><br>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="LHSMLXTP8TN2Q">
<input type="image" src="https://www.paypalobjects.com/webstatic/en_US/btn/btn_donate_pp_142x27.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img align="center" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<br>
<a href="https://www.chase.com/personal-banking/login-quickpay" alt="PayICBN@usicbn.org">
  <img align="center" border="0" width="120" height="35" src="http://www.bankcheckingsavings.com/wp-content/uploads/2016/01/chase-quickpay-logo.png" name="submit" alt="Pay by Chase QuickPay - use PayICBN@usicbn.org">
  with email PayICBN@usicbn.org
</a>

<br><br>JazakAllahu Khairan. May Allah reward you in abundance for all of your good deeds.
	</p>

    </div>
    
</div>

   <div class="clear"> </div>
      <br><br>
	  
<!--<div id="qq" class="singleRuleDivider" > </div> -->

<div id="container1">

    <div id="sideCol" style="width:29%">

    </div><!-- .sideCol end -->

    <div id="mainCol" style="width:100%">

<h2 style="color:black; margin:0px; background-color:white; padding:1px" align="left">News & Articles</h3>
<hr/>
	<div id="cont" style="height:500px; width:100%;overflow:auto;"> 

<b>Pantagraph News Updates</b>
<p>
<ul>
<li> <a href="http://m.pantagraph.com/pantagraph/photos-interfaith-rally-calls-for-religious-tollerance/collection_ada84cab-4f43-57c8-a8ca-e1f9e0eabc85.html?mobile_touch=true" class="FormRed"> Interfaith Rally calls for religious tolerance </a> </li>
<li> <a href="http://wglt.org/post/muslims-thank-not-our-town-bloomington-normal#stream/0" class="FormRed"> B-N Muslims Thank for the Not In Our Town Solidarity Event </a> </li>
<li> <a href="http://www.centralillinoisproud.com/video?videoId=299668010" class="FormRed"> Interfaith Rally with Bloomington Normal Community Members   </a> </li>
<li>ICBN participates in <a href="http://m.pantagraph.com/news/local/article_132b6cb2-5dec-51ac-8dd3-1b2041b23a27.html?mobile_touch=true" class="FormRed">peace vigil</a> held in uptown normal</li>
</ul>
</p>		
		<p><a target="new" href="http://usicbn.org/icbn/av/Bere-SyedInterview11-15-2013.mp3"> Perspectives on Islam & Violence </a> - Syed Gilani's response to Dr. Njiere Bere's opinion on Islam & Violence. Dr. Bere is a Sociology and Non-Western Religions Professor at Lincoln Christian University. </p>

		<p><a target="new" href="http://cities929.blogspot.com/2013/04/islamic-center-of-bloomington-normal.html"> Islamic Center of Bloomington-Normal Issues Statement on the Boston Bombers </a> - Muslims of Bloomington-Normal, like all other fellow Americans, are shocked and saddened... </p>
		<p><a target="new" href="http://itmpodcasttrack.com/podcast_track.mp3?iTunes=play&stationId=2559&episodeId=6342959&url=http://podcast.cities929.com/wrpw2/3961768.mp3"> ICBN joins cities929 Radio host on April 22nd 2013 </a> - Syed is President of the Islamic Center of Bloomington-Normal and he joins Robert to condemn the attacks in Boston and clear some misconceptions about Muslims... </p>

		<p><a target="new" href="http://www.pantagraph.com/news/local/crime-and-courts/participants-in-recovery-court-have-special-thanksgiving-dinner/article_3b3f0f62-3424-11e2-a608-001a4bcf887a.html"> Participants in Recovery Court have special Thanksgiving dinner</a> - The Islamic Center, together with the Diversity Project, sponsored a Thanksgiving Dinner for members of Recovery Court. <a target=new href="documents/thanksgivingDinnerFeedback.pdf" >See feedback received from the members </a> </p>

		<p><a target="new" href="http://www.pantagraph.com/calendar/religion/interfaith-ramadan-iftaar-party/event_9265f174-dbd3-11e1-bf25-abb9caeebbf9.html"> Interfaith Ramadan Iftar</a> - An interfaith Ramadan Iftar Party was organized by ICBN on Wednesday, August 8th. Many people from different faiths observed muslims breaking fast and enjoyed dinner together.</p>
		<p><a target="new" href="http://www.pantagraph.com/news/local/interfaith-trio-to-preach-togetherness-on-three-day-b-n/article_2c6ba30e-8120-11e1-9d80-001a4bcf887a.html">Interfaith trio to preach togetherness on three-day B-N visit</a><br>
		A rabbi, a pastor, and an imam from Seattle, known as the Interfaith Amigos will visit Bloomington-Normal this weekend to help people understand the relationship of different faiths...
		</p>
		<p><a target="new" href="documents/AWAKENING.pdf">
		Faith is a matter of the HEART, not of the mind - by M. Valentine</a> 
		</p>		
		<p><a target="new" href="http://www.pantagraph.com/special-sections/9-11/article_26d461cc-db0a-11e0-9daa-001cc4c03286.html">
		B-N Islamic community finds support after Sept. 11 events</a><br>
                    In the 10 years since terrorists attacked the United States, the Twin Cities' Islamic community has proven that it is possible for good shoots to sprout from evil roots.
 					 
		</p>
		<p><a target="new" href="http://suite101.com/article/central-illinois-bigotry-reflects-national-islamophobia-a278535">Central Illinois Bigotry Reflects National Islamophobia</a><br>
                    Right wing activists from Central Illinois espouse the same misinformation about American Muslims seen on the national level. 					   <a class="FormRed" href="http://www.suite101.com/writer_articles.cfm/budpolk" target="new"> Read</a> all articles by <i>Rothwell Polk</i>..
		</p>
		<p>
		<a >Interfaith Dialog: Islam Among Us, How Do we Respond ?</a><br>
			An interfaith dialog exploring similarities and negating misconceptions. This event is co-sponsored by ICBN, Moses Montefiore Temple, New Covenant Community and Unitarian Universalist Church of Bloomington-Normal. <a href="documents/InterfaithPanel10.pdf" class="FormRed">see Flyer</a> for more information.<br>
		</p>
	<p><a target="new" href="http://suite101.com/article/bloomington-normal-muslims-gather-for-eid-ul-fitr-prayers-a284557"> Bloomington-Normal Muslims Gather for Eid ul-Fitr Prayers</a> - Two hundred and fifty Bloomington-Normal, Illinois Muslims gathered at Wesleyan University for prayers..</p>

		<p><a target="new" href="http://suite101.com/article/muslims-enjoy-iftar-dinner-saturday-in-bloomington-normal-a280912"> Muslims Enjoy Iftar Dinner Saturday in Bloomington-Normal</a> - Iftar is the fast-breaking dinner eaten after sunset during the month of Ramadan. About 100 people gathered ..</p>
	
	</div>

    </div><!-- .mainCol end -->
	

<div id="container1">
    <div id="mainCol">
<h2 style="color:black; margin:0px; background-color:white; padding:1px" align="left">The Hajj - Lifetime Pilgrimage</h3>
<hr/>
		<div class="content clearfix">
		<iframe src="//assets.nationalgeographic.com/modules-video/assets/ngsEmbeddedVideo.html?guid=8d3a3f04-3aa8-4bd2-8a92-cc364c6d9b1c" width="300" height="200" frameborder="0" seamless="seamless" scrolling="no" allowFullScreen></iframe>
		</div>

    </div>
    <div id="sideCol">
	<h2 style="color:black; margin:0px; background-color:white; padding:1px" align="left">Short Introduction</h3>
<hr/>
			<object type="application/x-shockwave-flash" style="width:300px;height:200px;" data="http://www.youtube.com/v/ZHujiWd49l4&amp;hl=en&amp;fs=1">
				<param name="movie" value="http://www.youtube.com/v/ZHujiWd49l4&amp;hl=en&amp;fs=1" />
				<param name="quality" value="high" />
				<param name="wmode" value="transparent" />
				<param name="bgcolor" value="" />
			</object>
    </div>	
</div>			
</div>

   <!--<div id="qq" class="doubleRuleDivider" > </div>-->




