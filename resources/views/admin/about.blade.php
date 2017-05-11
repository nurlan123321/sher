@extends('layouts.admin')
@section('header')
<title>{{$title}}</title>
@endsection
@section('content')
	<div class="admin-padding">
		@if($about)	
		 @foreach($about as $about)
		<div class="tit">
			<h4>Заголовок</h4>
			{{ $about['title'] }}
		</div><hr />
		<div class="tit">
			<h4>Текст</h4>
			{!!$about['text']!!}
		</div><hr />
		<div class="tit">
			<h4>Картинка</h4>
			{{$about['images']}}
		</div>		<hr />
		 @endforeach
  <button class="btn btn-success edit">{!! Html::link(route('aboutEdit', ['about' => $about['id']]), $nameBtn) !!}</button>
 @endif
 </div>
@endsection