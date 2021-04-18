@extends('layout')

<head>
<title>Search functionality - justLaravel.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
@section('content')
<body>
<div style="">
	<div style="display: flex; ">
    <div style="width: 40%; background-color: #a7c5eb; padding: 100px 60px; height: 770px; ">
        <h1 style="font-family: 'Luckiest Guy', cursive; color:#f9f3f3;">{{ trans('sentence.Search your result')}}</h1>
        <img src="images/pale-doctor.png" style="width:450px; height: 400px; margin-top: 50px;">
    </div>
    <div style="width: 60%; padding-top: 60px;">
	<div class="container" style="">
		<form action="search" method="POST" role="search">
			{{ csrf_field() }}
			<div style="margin-left: 100px">
				<input style="margin-top: 30px; width: 470px; border: 2px solid #a7c5eb;" type="text" class="form-control" name="s"
					placeholder="{{ trans('sentence.Enter your id')}}">
				<input style="margin-top: 30px; width: 470px; border: 2px solid #a7c5eb;" type="text" class="form-control" name="q"
					placeholder="{{ trans('sentence.Enter your password')}}"> 
					<button style="margin-top: 30px; background-color: #9896f1; color: white; " type="submit" class="btn btn-default" >{{ trans('sentence.search')}}
						
					</button>
				</span>
			</div>
		</form>
		<div class="container" >
			@if(isset($details))
			<p style="padding-top: 30px;"> {{ trans('sentence.The Search results')}}<b> {{ $query }} </b>:</p>
			<h2>{{ trans('sentence.Your analysis results:')}}</h2>
			<table class="table" style="border: 2px solid #9896f1;">
				<thead>
					<tr style="background-color: #9896f1;">
						<th>{{ trans('sentence.Name')}}</th>
						<th>{{ trans('sentence.ID')}}</th>
						<th>{{ trans('sentence.Biochemical and clinical blood analysis')}}</th>
						<th>{{ trans('sentence.Assessment of the immune status')}}</th>
						<th>{{ trans('sentence.Allergy diagnostics')}}</th>
						<th>{{ trans('sentence.Hormonal status')}}</th>
					</tr>
				</thead>
				<tbody>
					@foreach($details as $user)
					<tr>
						<td>{{$user->name}}</td>
						<td>{{$user->patient_id}}</td>
						<td>{{$user->biochemical}}</td>
						<td>{{$user->immune}}</td>
						<td>{{$user->allergy}}</td>
						<td>{{$user->hormonal}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@elseif(isset($message))
			<p>{{ $message }}</p>
			@endif
		</div>
		</div>
	</div>
@endsection
