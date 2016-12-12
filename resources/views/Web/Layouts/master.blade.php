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
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis convallis felis. Pellentesque non urna mauris. Donec imperdiet lorem orci, quis efficitur sapien luctus quis. Aliquam dictum lacus risus, sed vulputate metus facilisis quis. Sed luctus rutrum dui, ut molestie velit mollis sed. Nam ut nisl tortor. Cras ut nisi lacinia, convallis lacus a, venenatis justo. Vivamus sit amet iaculis mi, nec suscipit nisl. Fusce pellentesque vestibulum maximus. Aliquam venenatis faucibus augue id auctor. Quisque tincidunt nisi dui, et condimentum diam vestibulum vel. Nulla imperdiet lectus eros, sit amet ultricies leo tristique ac. Mauris commodo id purus in imperdiet.
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


