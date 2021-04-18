@extends('layouts.app')

@section('content')
<br />
     <h3 align="center">{{ trans('sentence.Manage doctors')}}</h3>
     <br />
     <div style="margin-left: 100px; margin-right: 100px;">
<div align="right">
  <a href="{{ route('crud.create') }}" class="btn btn-success btn-sm">{{ trans('sentence.Create New Doctor')}}</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
  <tr>
    <th width="10%">{{ trans('sentence.Image')}}</th>
    <th width="35%">{{ trans('sentence.First Name')}}</th>
    <th width="35%">{{ trans('sentence.Last Name')}}</th>
    <th width="30%">{{ trans('sentence.Action')}}</th>
  </tr>
  @foreach($data as $row)
    <tr>
      <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
      <td>{{ $row->first_name }}</td>
      <td>{{ $row->last_name }}</td>
      <td>
        
        <form action="{{ route('crud.destroy', $row->id) }}" method="post">
          <a href="{{ route('crud.show', $row->id) }}" class="btn btn-primary">{{ trans('sentence.Show')}}</a>
          <a href="{{ route('crud.edit', $row->id) }}" class="btn btn-warning">{{ trans('sentence.Edit')}}</a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">{{ trans('sentence.Delete')}}</button>
        </form>
      </td>
    </tr>
  @endforeach
</table>
{!! $data->links() !!}
</div>
@endsection