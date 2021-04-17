@extends('layouts.app')
 
@section('content')
<div style="margin-right: 100px; margin-left: 100px;">
    <br />
     <h3 align="center">Manage Results</h3>
     <br />
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div align="right" style="margin-top: 20px;">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered" style="margin-top: 20px;">
        <tr>
            <th>NO</th>
            <th>Name</th>
            <th>ID</th>
            <th>Biochemical and clinical blood analysis</th>
            <th>Assessment of the immune status</th>
            <th>Allergy diagnostics</th>
            <th>Hormonal status</th>
            <th>Password</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->patient_id }}</td>
            <td>{{ $product->biochemical }}</td>
            <td>{{ $product->immune }}</td>
            <td>{{ $product->allergy }}</td>
            <td>{{ $product->hormonal }}</td>
            <td>{{ $product->password }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
</div>  
@endsection