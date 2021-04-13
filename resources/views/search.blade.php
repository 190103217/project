

<head>
<title>Search functionality - justLaravel.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<form action="http://localhost:8888/project/public/search" method="POST" role="search">
			{{ csrf_field() }}
			<div class="input-group">
				<input style="" type="text" class="form-control" name="s"
					placeholder="Enter your id">
				<input style="margin-top: 30px;" type="text" class="form-control" name="q"
					placeholder="Enter your password"> 
					<button style="margin-top: 30px;" type="submit" class="btn btn-default" >search
						
					</button>
				</span>
			</div>
		</form>
		<div class="container">
			@if(isset($details))
			<p style="padding-top: 30px;"> The Search results <b> {{ $query }} </b> are :</p>
			<h2>Your analysis results:</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Name</th>
						<th>ID</th>
						<th>Biochemical and clinical blood analysis</th>
						<th>Assessment of the immune status</th>
						<th>Allergy diagnostics</th>
						<th>Hormonal status</th>
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

