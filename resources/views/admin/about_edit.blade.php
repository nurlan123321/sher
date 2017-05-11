@extends('layouts.admin')
@section('header')
<title>{{$title}}</title>
@endsection
@section('content')
<div class="wrapper-form">
	{!! Form::open(['url' => route('aboutEdit', ['about'=>$data['id']]),'class' => 'form-horizontal', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
	
	<div class="form-group">
		{!! Form::hidden('id', $data['id']) !!}
		{!! Form::label('title', 'Заголовок', ['class' => 'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('title',$data['title'],['class'=>'form-control', 'placeholder'=>'Введите название']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('text', 'Текст', ['class' => 'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::textarea('text',$data['text'],['id'=>'editor','class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('old_images', 'Изображение', ['class' => 'col-xs-2 control-label']) !!}
		<div class="col-xs-3">
			{!! Html::image('img/'.$data['images'], '') !!}
			{!! Form::hidden('old_images', $data['images'], ['class' => 'img-responive']) !!}
		
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('images', 'Изображение', ['class' => 'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::file('images',['class'=>'filestyle']) !!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			{!! Form::button('Сохранить',['class'=>'btn btn-success', 'type' => 'submit']) !!}
		</div>
	</div>
	{!! Form::close() !!}
</div>
<script>CKEDITOR.replace('editor')</script>
@endsection