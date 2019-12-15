@extends('nav')
@section('use')
<h1 class="bg-danger">this is write post page</h1>

<!-- <a  href="{{route('catagorys')}}" class="btn btn-danger">catagorys</a> -->

<a  href="{{route('addcatagory')}}" class="btn btn-danger">addcatagory</a>
<a  href="{{route('allcatagory')}}" class="btn btn-success">allcatagory</a>
<div class="container" class="bg-danger">



<form action="{{url('update/editcata/'.$edit->id)}}" method="post">
 @csrf
<div class="form-group">
<label for="">catagory name</label>
<input type="text" name="cataname" value="{{$edit->name}}"class="form-control">
</div>

<div class="form-group">
<label for="">slug name</label>
<input type="text" name="slugname" value="{{$edit->slug}}" class="form-control">
</div>

<div class="form-group">
<input type="submit" value="update" class="btn btn-success">
</div>


</form>
</div>

@endsection
