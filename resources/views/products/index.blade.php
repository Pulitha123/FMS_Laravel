@extends('products.layout')
 
@section('content')
<br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Fish Receiving Mangement System</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}">Add New Product</a>
            </div>
        </div>
    </div>
    <br><br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Supplier Name</th>
            <th>Boat Name</th>
            <th>Fish Type</th>
            <th>Fish Grades</th>
            <th>Weight</th>
            <th>Temperature</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->suppliername }}</td>
            <td>{{ $product->boatname }}</td>
            <td>{{ $product->fishtype }}</td>
            <td>{{ $product->fishgrade }}</td>
            <td>{{ $product->weight }}</td>
            <td>{{ $product->temperature }}</td>
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
      
@endsection