@extends('layouts.app')

@section('content')
@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif
<div style="margin-left: 400px; margin-right: 200px;">
<div align="right">
 <a href="{{ route('crud.index') }}" class="btn btn-primary">Back</a>
</div>

<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">

 @csrf
 <div class="form-group">
  <label class="col-md-4 text-left">Enter First Name</label>
  <div class="col-md-7">
   <input type="text" name="first_name" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-md-4 text-left">Enter Last Name</label>
  <div class="col-md-7">
   <input type="text" name="last_name" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-md-4 text-left">Select Profile Image</label>
  <div class="col-md-7">
   <input type="file" name="image" />
  </div>
 </div>
 <br /><br /><br />
 <div class="form-group " style="margin-left: 200px;">
  <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
 </div>

</form>
</div>
@endsection