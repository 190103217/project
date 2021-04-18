@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
 <div align="right">
  <a href="{{ route('crud.index') }}" class="btn btn-primary">{{ trans('sentence.Back')}}</a>
 </div>
 <br />
 <img style="width: 300px; height: 400px;" src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
 <h3>{{ trans('sentence.First Name')}} - {{ $data->first_name }} </h3>
 <h3>{{ trans('sentence.Last Name')}} - {{ $data->last_name }}</h3>
</div>
@endsection