@extends('layout')
<style>    
body {
    color: #000;
    background-image: url("background.jpg");
    font-family: "Roboto", sans-serif;
}
.contact-form {
    padding: 50px;
    margin: 30px auto;
}	
.contact-form h1 {
    font-size: 42px;
    font-family: 'Ubuntu', sans-serif;
    margin: 0 0 50px;
    text-align: center;
}
.contact-form .form-group {
    margin-bottom: 20px;
}
.contact-form .form-control, .contact-form .btn {
    min-height: 40px;
    border-radius: 2px;
}
.contact-form .form-control {
    border-color: #6699ff;
}
.contact-form .form-control:focus {
    border-color: #6699ff;
    box-shadow: 0 0 8px #6699ff;
}
.contact-form .btn-primary, .contact-form .btn-primary:active {
    min-width: 250px;
    color: #fcda2e;
    background: #000 !important;
    margin-top: 20px;
    border: none;
}
.contact-form .btn-primary:hover {
    color: #fff; 
}
.contact-form .btn-primary i {
    margin-right: 5px;
}
.contact-form label {
    opacity: 0.9;
}
.contact-form textarea {
    resize: vertical;
}
.bs-example {
    margin: 20px;
}
</style>
</head>
@section('content')
<body>
<div class="container-lg">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="contact-form">
				<h1>Make your appointment</h1>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="email" method="post">
                @csrf
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputName">Name</label>
								<input type="text" name="name" class="form-control" placeholder="Enter Name">
                                @error('name')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputEmail">Surname</label>
								<input type="text" name="surname" class="form-control" placeholder="Enter Surname">
                                @error('surname')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
							</div>
						</div>
					</div>   
					<div class="form-group">
						<label for="inputSubject">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        @error('email')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
					</div>         
					<div class="form-group">
						<label for="inputSubject">Reason</label>
                        <input type="text" name="reason" class="form-control" placeholder="Enter Your Reason">
                        @error('reason')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
					</div>
					<div class="form-group">
						<label for="inputSubject">Doctor</label>
                        <div>
                          <input type="radio" id="huey" name="doctor" value="huey"
                                 checked>
                          <label for="huey">Huey James</label>
                        </div>

                        <div>
                          <input type="radio" id="dewey" name="doctor" value="dewey">
                          <label for="dewey">Dewey Hawkings</label>
                        </div>

                        <div>
                          <input type="radio" id="louie" name="doctor" value="louie">
                          <label for="louie">Louie Vitton</label>
                        </div>
                        @error('doctor')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
					</div>
					<div class="form-group">
						<label for="inputSubject">Date</label>
                        <input type="datetime-local" name="date" class="form-control">
                        @error('date')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
					</div>
					<div class="form-group">
						<label for="inputMessage">Message</label>
                        <textarea name="content" rows="5" class="form-control" placeholder="Enter Your Message"></textarea>
                        @error('content')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
					</div>
					<div class="text-center">
						<button type="submit" class="btn " style="background-color: #6699ff;">Send</button>
					</div>            
				</form>
			</div>
		</div>
	</div>
</div>
</body>
@endsection