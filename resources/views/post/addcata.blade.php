@extends('nav')
@section('use')
<h1 class="bg-danger">this is write post page</h1>

<!-- <a  href="{{route('catagorys')}}" class="btn btn-danger">catagorys</a> -->

<a  href="{{route('addcatagory')}}" class="btn btn-danger">addcatagory</a>
<a  href="{{route('allcatagory')}}" class="btn btn-success">allcatagory</a>
<div class="container" class="bg-danger">



<form action="{{route('catagorys')}}" method="post">
 @csrf
<div class="form-group">
<label for="">catagory name</label>
<input type="text" name="cataname" class="form-control">
</div>

<div class="form-group">
<label for="">slug name</label>
<input type="text" name="slugname" class="form-control">
</div>

<div class="form-group">
<input type="submit" class="btn btn-success">
</div>


</form>
</div>

@endsection
