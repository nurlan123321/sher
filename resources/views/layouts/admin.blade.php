@yield('header')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<title>{{$title}}</title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css"> 
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"> 
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<script type="text/javascript" src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
</head>
<body>
<header>
<div class="title">
	<h1>{{$title}}</h1>
</div>
<div id="filters" class="sixteen columns">
	<ul style="padding: 0px">
		<li><a href="{{route('pages')}}">
			<h5>Главная страница</h5>
		</a></li>
		<li><a href="{{route('service')}}">
			<h5>Услуги</h5>
		</a></li>
		<li><a href="{{route('team')}}">
			<h5>Сотрудники</h5>
		</a></li>
		<li><a href="{{route('about')}}">
			<h5>О нас</h5>
		</a></li>
			<li class="dropdown sixteen columns">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <h5><span><i class="fa fa-user use" aria-hidden="true"></i></span>{{ Auth::user()->name }} <span class="caret"></span></h5>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li class="drop">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Выйти 
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
	</ul>
</div>
<div class="container">
	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif
	@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif
</div>
</header>
<div class="container">
	@yield('content')	
</div>
</body>
</html>