@extends('layouts.app')
   
@section('content')
<div style="margin-right: 100px; margin-left: 480px;">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="margin-top: 50px;">
                <h2> Edit Result</h2>
            </div>
            <div class="pull-right" align="center" style="margin-top: 40px;">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row" style="margin-top: 40px;">
            <div class="col-xs-12 col-sm-12 col-md-7">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>ID:</strong>
                <input type="text" name="patient_id" value="{{ $product->patient_id }}" class="form-control" placeholder="ID"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Biochemical and clinical blood analysis:</strong>
                <input type="text" name="biochemical" value="{{ $product->biochemical }}" class="form-control" placeholder="bio result"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Assessment of the immune status:</strong>
                <input type="text" name="immune" value="{{ $product->immune }}" class="form-control" placeholder="immune result"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Allergy diagnostics:</strong>
                <input type="text" name="allergy" value="{{ $product->allergy }}" class="form-control" placeholder="allergy result"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Hormonal status:</strong>
                <input type="text" name="hormonal" value="{{ $product->hormonal }}" class="form-control" placeholder="hormonal result"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="text" name="password" value="{{ $product->password }}" class="form-control" placeholder="enter password"></textarea>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-7 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
</div>
@endsection