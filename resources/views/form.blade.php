@extends('layout')
<head>
    <!-- BOOTSTRAP -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"> </script>
</head>

@section('content')
@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Form</div>
                <div class="card-body">
                
                      <form action="http://localhost:8888/project/public/form" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
                      
                        <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-right">Name</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="overview" class="col-sm-4 col-form-label text-md-right">Address</label>
                            <div class="col-md-6">
                                <input id="adress" type="text" class="form-control" name="address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Phone number</label>
                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="phone_number">
                            </div>
                        </div>
                        <div class="form-group row ">
                        <label for="title" class="col-sm-4 col-form-label text-md-right">Recipe</label>
                        <div class="col-md-6">
                          <input type="file" name="photos[]" multiple />
                        </div>    
                      </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

