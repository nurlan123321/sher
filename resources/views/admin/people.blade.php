@extends('layouts.admin')
@section('header')
<title>{{$title}}</title>
@endsection
@section('content')
	<div class="admin-padding">
	@if($people)	
<table class="table table-hover table-striped table-responive">
	 <thead>
		 <tr>
			<th>№</th>
			<th>Имя</th>
			<th>Должность</th>
			<th>Текст</th>
			<th>Картинка</th>
			<th>Редактировать</th>
			<th>Удалить</th>
		 </tr>
	 </thead>
	 <tbody>
		 @foreach($people as $people)
			<tr>
				
				<td>{!! $people['id'] !!}</td>
				<td>{!! $people['name'] !!}</td>
				<td>{!!$people['position']!!}</td>
				<td>{!!$people['text']!!}</td>
				<td>{{$people['images']}}</td>
				
				<td><button class="btn btn-success edit">{!! Html::link(route('teamEdit', ['team' => $people['id']]), $nameBtn) !!}</button></td>
				<td>
					{!! Form::open(['url' => route('teamEdit', ['team' => $people['id']]), 'class'=>'form-horizontal', 'method'=>'POST'])!!}
						{{ method_field('DELETE') }}
						{!! Form::button('Удалить', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
					{!! Form::close()!!}
				</td>
			</tr>
		 @endforeach
		 
	 </tbody>
 </table>
 <button class="btn btn-success edit">{!! Html::link(route('teamAdd'),'Добавить запись') !!}</button></td>
 @endif
 </div>

@endsection