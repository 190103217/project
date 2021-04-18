@extends('layouts.app')

@section('content')
<div style="margin-right: 100px; margin-left: 400px;">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="margin-top: 50px;">
                <h2>{{ trans('sentence.Show Result')}}</h2>
            </div>
            <div class="pull-right" align="center" style="margin-top: 40px;">
                <a class="btn btn-primary" href="{{ route('products.index') }}">{{ trans('sentence.Back')}}</a>
            </div>
        </div>
    </div>
   
    <div class="row" style="margin-top: 40px;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ trans('sentence.Name')}}:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ trans('sentence.ID')}}:</strong>
                {{ $product->patient_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ trans('sentence.Biochemical and clinical blood analysis')}}:</strong>
                {{ $product->biochemical }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ trans('sentence.Assessment of the immune status')}}:</strong>
                {{ $product->immune }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ trans('sentence.Allergy diagnostics')}}:</strong>
                {{ $product->allergy }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ trans('sentence.Hormonal status')}}:</strong>
                {{ $product->hormonal }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ trans('sentence.Password')}}:</strong>
                {{ $product->password }}
            </div>
        </div>
    </div>
</div>
@endsection