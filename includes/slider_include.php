    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
    <div id="sliderb_container" style="position: relative; top: 0px; left: 0px; width: 960px; height: 350px; overflow: hidden; ">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 960px; height: 350px;
            overflow: hidden;">
			
            <div>
                <img u=image src="images/openhouse1.png" />
                <div u="thumb">Open House Invitation, Registration required. <a style="text-decoration: none !important;color:white" href="http://www.usicbn.org/icbn/documents/OpenHouse2016.pdf">See flyer</a></div>
				  <div u=caption t="10" class="captionBlack"  style="position:absolute; left:0px; bottom: 170px; width:200px; height:30px;"> 
					<a style="text-decoration: none !important;color:white" href="http://bit.ly/Apr16OpenHouse">&nbsp;Register Now</a> 
				  </div>				
            </div>	
			
            <div>
                <img u=image src="images/qurancompetition.png" />
                <div u="thumb">Register Online - <a style="text-decoration: none !important;color:yellow" href="http://tinyurl.com/BNQuranCompetition2016">Click Here</a></div>
				  <div u=caption t="10" class="captionBlack"  style="position:absolute; left:0px; bottom: 170px; width:200px; height:30px;"> 
					<a style="text-decoration: none !important;color:white" href="http://www.usicbn.org/icbn/documents/QuranCompetition2016.pdf">&nbsp;See Flyer</a> 
				  </div>					
            </div>
	   <!--
            <div>
                <img u=image src="http://darussalamfoundation.org/wp-content/uploads/holy-quran-on-blue-carpet-960x350.jpg" />
                <div u="thumb">Do you notice it is draggable by mouse/finger? </br> Testing ..</div>
          <div u=caption t="10" class="captionOrange"  style="position:absolute; left:5px; bottom: 170px; width:400px; height:130px;"> 
            slideshow transition twins 
          </div>			
            </div>-->

		
<!--
            <div>
                <img u=image src="images/clothingDrive.png" />
                <div u="thumb">Please drop off at ICBN or Masjid Ibrahim before Sunday Noon</div>
            </div>			-->     	
        </div>
   
        <!--#region Thumbnail Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
        <!-- thumbnail navigator container -->
        <div u="thumbnavigator" style="position: absolute; bottom: 0px; left: 0px; height:60px; width:960px;">
            <div style="filter: alpha(opacity=40); opacity:0.4; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides">
                <div u="prototype" style="position: absolute; width: 960px; height: 60px; top: 0; left: 0;">
                    <div u="thumbnailtemplate" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; font-family: verdana; font-weight: normal; color:#fff; line-height: 45px; font-size:20px; padding-left:10px;"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!--#endregion ThumbnailNavigator Skin End -->
        
        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->

        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->

        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="top: 123px; right: 8px;">
        </span>
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
		
        <!-- Trigger -->
        <script>
            jssor_sliderb_starter('sliderb_container');
        </script>
    </div>
    <!-- Jssor Slider End -->	