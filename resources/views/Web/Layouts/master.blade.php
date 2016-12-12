<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
<meta content="ahmed" name="author" />
<title>Excursions and transfers in Sharm el sheikh</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="images/icon.ico" rel="icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/flash.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/cart.css')}}"/>
<link rel="stylesheet" href="{{ asset('adminlte/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron">
    @yield('_extra_css')
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sitemapstyler.js')}}"></script>
<script type="text/javascript" src="{{asset('js/slides.min.jquery.js')}}"></script>
<script type="text/javascript">
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true
			});
		});
	</script>
</head>
<body>
<div id="container">
  <div id="container2">
    <div id="header">
      <div id="language">
        <div id="languages">
          <div id="flages"> 
              <a href="http://www.sharmland.co.uk" class="notend" target="_blank"> <img src="{{asset('images/english-flag.png')}}" alt="english" /></a> 
              <a href="http://www.sharmland.com" class="notend" target="_blank" ><img src="{{asset('images/germany-flag.png')}}" alt="#" /></a> </div>
        </div>
      </div>
        <div id="links"> <a href="{{route('cart')}}" class="shoping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> 
          {{Session::has('cart')?Session::get('cart')->totalQty:0}}
</a>
        <ul>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="information.php?page=About us">About us</a></li>
          <li><a href="information.php?page=contact us">Contact us</a></li>
          <li><a href="information.php?page=faq">FAQs</a></li>
          <li><a href="information.php?page=About sharm">About Sharm</a></li>
          <li><a href="information.php?page=About Egypt">About Egypt</a></li>
          <li><a href="reveiws.php?action=read">Gästebuch</a></li>
        </ul>
      </div>
    </div>
    <div id="banner">
      <div class="flash"> <img src="{{asset('images/logo-small.png')}}" alt="sharmland.com"/> </div>
      <div class="slideshow">
        <div style="margin: 10px 12px;">
          <div id="flash_nav">
            <div id="flash2">
              <div id="flash_container">
                <div id="flash">
                  <div id="slides">
                    <div class="slides_container"> 
                        <img src="flash/slides/p_0001.jpg" alt="sharmland.com" /> 
                        <img src="flash/slides/p_0002.jpg" alt="sharmland.com" /> 
                        <img src="flash/slides/p_0003.jpg" alt="sharmland.com" /> 
                        <img src="flash/slides/p_0004.jpg" alt="sharmland.com" /> 
                        <img src="flash/slides/p_0005.jpg" alt="sharmland.com" /> 
                        <img src="flash/slides/p_0006.jpg" alt="sharmland.com" /> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="mainmenu">
      <ul>
        <li class="normal"><a href="#"><span>Private Transfer</span></a> </li>
        <li class="normal"><a href="#"><span>Sharm El Sheikh</span></a> </li>
        <li class="normal"><a href="#"><span>Hurghada</span></a> </li>
        <li class="normal"><a href="#"><span>Alexandria</span></a> </li>
        <li class="normal"><a href="#"><span>Cairo</span></a> </li>
        <li class="normal"><a href="#"><span>Dahab</span></a> </li>
        <li class="normal"><a href="#"><span>Luxor</span></a> </li>
        <li class="normal"><a href="#"><span>Marsa Alam</span></a> </li>
        <li class="normal"><a href="#"><span>Taba</span></a></li>
        <li class="normal"><a href="#"><span>Port Said</span></a></li>
        <li><a href="#"><span>Domiat</span></a></li>
      </ul>
    </div>
    <div id="real-body">
      <div id="leftside">
        <div id="pox">
          <div class="top"> </div>
          <div class="body">
            <div id="label-cover">
              <div class="label_pdf"> </div>
            </div>
            <div style="padding-left:10px; padding-top:40px"> <a href="images/files/PRICELIST english..pdf" title="PRICELIST english..pdf" target="_blank"> <img src="images/download.jpg"/></a> </div>
            <div id="label-cover">
              <div class="label3"> </div>
            </div>
            <div style="width: 186px; margin: 0 auto; padding-top:40px;"> <a href="information.php?page=contact us"><img src="images/en.jpg" /> </a></div>
            <div id="label-cover">
              <div class="label"> </div>
            </div>
            <div id="follow"> <a href="http://www.facebook.com/sharmlandtours" target="_blank"><img src="images/facebook-icon.png" class="left" style="margin-right: 10px;" /></a> <a href="http://www.youtube.com/sharmland" target="_blank"><img src="images/youtube.png" class="left" /> </a></div>
            <div style="clear:both;"></div>
            <div id="label-cover">
              <div class="label2"> </div>
            </div>
            <div style="width: 190px; height: 79px; margin: 0 auto;margin-top: 45px;"> <a href="http://www.holidaycheck.de/reisetipp-Reiseinformationen+Sharm+Land+Tours-zid_128801.html" target="_blank"> <img src="images/holidaycheck.png" alt="holidaycheck" /></a> </div>
            <div style="width: 190px; margin: 0 auto; "> <a href="http://www.tripadvisor.com/Attraction_Review-g297555-d3266843-Reviews-Sharm_Land_Day_Tours-Sharm_El_Sheikh_South_Sinai_Red_Sea_and_Sinai.html" target="_blank"><img src="images/trip-advisor-icon.png" /></a></div>
            <div id="label-cover">
              <div class="label4"> </div>
            </div>
            <div style=" padding-top: 45px;width:196px; margin:0 auto;"> <a href="information.php?page=how-book"> <img src="images/ger.png" /></a> </div>
            <div id="speciall_offers001"> <a href="show.php?id=44"> <img src="images/special_offers.jpg" /></a> </div>
            <div id="newsletters">
              <form action="index.php" method="get" style="padding-top: 191px;">
                <input type="text" name="email" value="enter your mail" onclick="this.value=''" class="input" />
                <input type="hidden" value="index" name="page" />
                <input type="submit" name="news" value="" class="submit" />
              </form>
            </div>
            <div  style="margin:10px 0px 0px 0px ;">
              <div style="line-height: 10px; background: none;">
                <div style="max-width: 160px; width: 160px; background: none; margin: 0 auto;">
                  <object id="w4aaa9c4e6c122b4c4af9ecec7aeeb33a" data="http://static.hotelscombined.com.s3.amazonaws.com/swf/weather_widget.swf" height="272" style="margin: 0; padding: 0;" type="application/x-shockwave-flash" width="160">
                    <param name="movie" value="http://static.hotelscombined.com.s3.amazonaws.com/swf/weather_widget.swf" />
                    <param name="wmode" value="transparent">
                    <param name="flashvars" value="station_id=HESH&amp;city_name=Sharm el-Sheikh&amp;language=en&amp;use_celsius=Yes&amp;skinName=Blue&amp;PID=163946&amp;ts=201401180634&amp;hideChangeSkin=No">
                    <param name="allowNetworking" value="all">
                    <param name="allowScriptAccess" value="always">
                  </object>
                  <a alt="Hotels Combined" href="http://widgets.hotelscombined.com/City/Weather/Sharm_el%20Sheikh.htm?use_celsius=Yes" style="margin: 0; padding: 0; text-decoration: none; background: none;" target="_blank" title="Hotels Combined">
                  <div style="background: none; color: white; text-align: center; width: 160px; height: 17px; margin: 0px 0 0 0; padding: 5px 0 0 0; cursor: pointer; background: transparent url(http://static.hotelscombined.com.s3.amazonaws.com/Pages/WeatherWidget/Images/weather_blue_bottom.png) no-repeat; font-size: 12px; font-family: Arial,sans-serif; line-height: 12px; font-weight: bold;"> See 10-Day Forecast</div>
                  </a>
                  <div style="text-align: center; width: 160px;"> <a alt="Hotels Combined" href="http://www.hotelscombined.com" rel="nofollow" style="background: none; font-family: Arial,sans-serif; font-size: 9px; color: #777777;" title="Hotels Combined"> © HotelsCombined.com</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="bottom"> </div>
        </div>
      </div>
        <!-- container -->
        @yield('content')
        <!-- end container -->
    </div>
    <div id="foter">
      <ul>
        <li><a href="index.php">Home |</a></li>
        <li><a href="information.php?page=About us"> |</a></li>
        <li><a href="information.php?page=contact us">Contact us |</a></li>
        <li><a href="information.php?page=faq">FAQs |</a></li>
        <li><a href="information.php?page=About sharm">About Sharm |</a></li>
        <li><a href="information.php?page=About Egypt">About Egypt |</a></li>
        <li><a href="information.php?page=sitemap">Site map |</a></li>
        <li><a href="reveiws.php?action=read">Gästebuch</a></li>
      </ul>
      <p>? All Right Reserved , Sharm Land Tours co. 2011 </p>
      <p>Powered by <a href="mailto:info.matrixcode@gamil.com">MSMS Sites</a></p>
    </div>
    <!------------------------------ javascript ---------------------->
   @yield('_extra_js')
    <!------------------------------ javascript  ---------------------->
  </div>
</div>
</body>
</html>


