
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>{{$meta['title']}}</title>
<link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"> 
<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css"> 
<link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/parsley.css') }}" rel="stylesheet" type="text/css">
 
</head>
<body>

<!--Header_section-->
<header id="header_wrapper">
	<div class="container">
    <div class="header_box">
        <div class="logo"><a href="#"><img src="img/logo.png" alt="logo"></a></div>
      	@if(isset($menu))
		<nav class="navbar navbar-inverse" role="navigation">
	      	<div class="navbar-header">
	        	<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
	        </div>
		    <div id="main-nav" class="collapse navbar-collapse navStyle">
				<ul class="nav navbar-nav" id="mainNav">
					@foreach($menu as $item)
						<li><a href="#{{$item['alias']}}" class="scroll-link">{{$item['title']}}</a></li>
					@endForeach
				</ul>
	        </div>
		</nav>
      @endif
    </div>
</div>
</header>
<!--Header_section--> 

	@yield('content')

	<div class="container">
    <div class="footer_bottom"><span>Copyright © 2014,    Template by <a href="http://webthemez.com">WebThemez.com</a>. </span> </div>
  </div>
</footer>
<script type="text/javascript" src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-scrolltofixed.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.nav.js')}}"></script> 
<script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.isotope.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wow.js')}}"></script>
<script type="text/javascript" src="{{asset('js/parsley.js')}}"></script>  
 <!-- <script src="{{asset('contact/jqBootstrapValidation.js')}}"></script>
 <script src="{{asset('contact/contact_me.js')}}"></script> -->
 <script>
    $('#form').parsley();
</script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

</body>
</html>