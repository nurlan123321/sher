@extends('layouts.admin')
@section('header')
<title>{{$title}}</title>
@endsection
@section('content')

@if($pages)	
<table class="table table-hover table-striped">
	 <thead>
		 <tr>
			
			<th>Имя</th>
			<th>Номер</th>
			<th>Номер</th>
			<th>Номер</th>
			<th>Картинка</th>
			<th>Редактировать</th>
			
		 </tr>
	 </thead>
	 <tbody>
		 @foreach($pages as $page)
			<tr>
				
				<!--zdes my delaem ssylkoi nawe imya -->
				<td>{!! $page['name'] !!}</td>
				<td>{{$page['owka']}}</td>
				<td>{{$page['megacom']}}</td>
				<td>{{$page['billain']}}</td>
				<td>{{$page['images']}}</td>
				
				<td><button class="btn btn-success edit">{!! Html::link(route('pagesEdit', ['page' => $page['id']]), $nameBtn) !!}</button></td>
				
			</tr>
		 @endforeach
		 
	 </tbody>
 </table>
@endif

@endsection	