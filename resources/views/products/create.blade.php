@extends('layouts.app')
  
@section('content')
<div style="margin-right: 100px; margin-left: 480px;">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="margin-top: 50px;">
                <h2>{{ trans('sentence.Add New Result')}}</h2>
            </div>
            <div class="pull-right" align="center" style="margin-top: 40px;">
                <a class="btn btn-primary" href="{{ route('products.index') }}">{{ trans('sentence.Back')}}</a>
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
   
<form action="{{ route('products.store') }}" method="POST">
    @csrf
  
     <div class="row" style="margin-top: 50px;">
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>{{ trans('sentence.Name')}}:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>{{ trans('sentence.ID')}}:</strong>
                <input type="text" name="patient_id" class="form-control" placeholder="ID"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>{{ trans('sentence.Biochemical and clinical blood analysis')}}:</strong>
                <input type="text" name="biochemical" class="form-control" placeholder="bio result"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>{{ trans('sentence.Assessment of the immune status')}}:</strong>
                <input type="text" name="immune" class="form-control" placeholder="immune result"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>{{ trans('sentence.Allergy diagnostics')}}:</strong>
                <input type="text" name="allergy" class="form-control" placeholder="allergy result"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>{{ trans('sentence.Hormonal status')}}:</strong>
                <input type="text" name="hormonal" class="form-control" placeholder="hormonal result"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>{{ trans('sentence.Password')}}</strong>
                <input type="text" name="password" class="form-control" placeholder="enter password"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-left: 200px;">
                <button type="submit" class="btn btn-primary">{{ trans('sentence.Submit')}}</button>
        </div>
    </div>
   
</form>
@endsection