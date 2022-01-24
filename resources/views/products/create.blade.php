@extends('products.layout')
  
@section('content')
<br><br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Please Enter the Every Fields<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Supplier Name</strong>
                <input type="text" name="suppliername" class="form-control" placeholder="Select the Supplier Name" list='supplier'>
                <datalist id="supplier">
      <option value="Sarath">
      <option value="Kumara">
      <option value="Jinadasa">
    </datalist>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Boat Name</strong>
                <input type="text" name="boatname" class="form-control" placeholder="Select the Boat Name" list='boat'>
                <datalist id="boat">
      <option value="Veera 6">
      <option value="Trinco 2">
      <option value="Sahan Putha">
    </datalist>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fish Type</strong>
                <input type="text" name="fishtype" class="form-control" placeholder="Select the Fish Type" list='fishtype'>
                <datalist id="fishtype">
      <option value=" YellowFin Tuna">
      <option value="BigEye">
      <option value="Swordfish">
    </datalist>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fish Grades</strong>
                <input type="text" name="fishgrade" class="form-control" placeholder="Select the Fish Grade" list='fishgrade'>
                <datalist id="fishgrade">
      <option value="A+">
      <option value="A">
      <option value="B">
      <option value="C">
    </datalist>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Weight</strong>
                <input type="text" name="weight" class="form-control" placeholder="Enter the Weight">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Temperature</strong>
                <input type="text" name="temperature" class="form-control" placeholder="Enter the Temperature">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection