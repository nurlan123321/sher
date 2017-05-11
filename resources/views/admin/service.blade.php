@extends('layouts.admin')
@section('header')
<title>{{$title}}</title>
@endsection
@section('content')
<div class="admin-padding">
	@if($services)	
<table class="table table-hover table-striped table-responive">
	 <thead>
		 <tr>
			<th>№</th>
			<th>Имя</th>
			<th>Текст</th>
			<th>Картинка</th>
			<th>Редактировать</th>
			<th>Удалить</th>
		 </tr>
	 </thead>
	 <tbody>
		 @foreach($services as $service)
			<tr>
				
				<td>{!! $service['id'] !!}</td>
				<td>{!! $service['name'] !!}</td>
				<td>{!!$service['text']!!}</td>
				<td>{{$service['images']}}</td>
				
				<td><button class="btn btn-success edit">{!! Html::link(route('serviceEdit', ['page' => $service['id']]), $nameBtn) !!}</button></td>
				<td>
					{!! Form::open(['url' => route('serviceEdit', ['page' => $service['id']]), 'class'=>'form-horizontal', 'method'=>'POST'])!!}
						{{ method_field('DELETE') }}
						{!! Form::button('Удалить', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
					{!! Form::close()!!}
				</td>
			</tr>
		 @endforeach
		 
	 </tbody>
 </table>
 <button class="btn btn-success edit">{!! Html::link(route('serviceAdd'),'Добавить запись') !!}</button></td>
 </div>
@endif
@endsection