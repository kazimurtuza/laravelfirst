@extends('nav')
@section('use')
<h1 class="bg-danger">this is write post page</h1>

<a  href="{{route('addcatagory')}}" class="btn btn-danger">addcatagory</a>
<a  href="{{route('allcatagory')}}" class="btn btn-success">allcatagory</a>
<a  href="{{route('allpost')}}" class="btn btn-info">allpost</a>
<div class="container" class="bg-danger">


<form action="{{route('storepost')}}" method="post" enctype="multipart/form-data">
@csrf

<div class="form-group">
<label for="">title</label>
<input type="text" name="title" class="form-control">
</div>

<div class="form-group">
<label for="">catagory_id</label>
<select name="catagory_id" id="">
@foreach( $allcatagory  as $row)
<option value="{{$row->id}}">{{$row->name}}</option>

@endforeach
</select>
</div>

<div class="form-group">
<label for="">img</label>
<input type="file" name="image"class="form-control">
</div>
<div class="form-group">
<label for="">details</label>
<!-- <input type="text" name="details" class="form-control"> -->
<textarea  id="" cols="30" rows="10" name="details" class="form-control"> </textarea>
</div>

<div class="form-group">

<input type="submit" class="btn btn-success">
</div>


</form>
</div>
@endsection('use')