@extends('nav')
@section('use')
<h1 class="bg-danger">this is write post page</h1>

<a  href="{{route('addcatagory')}}" class="btn btn-danger">addcatagory</a>
<a  href="{{route('allcatagory')}}" class="btn btn-success">allcatagory</a>
<a  href="{{route('allpost')}}" class="btn btn-info">allpost</a>
<div class="container" class="bg-danger">


<form action="{{url('updatepost/'.$post->id)}}" method="post" enctype="multipart/form-data">
@csrf

<div class="form-group">
<label for="">title</label>
<input type="text" name="title" value="{{$post->title}}" class="form-control">
</div>

<input type="hidden" name="old_img" value="{{$post->img}}">

<div class="form-group">
<label for="">catagory_id</label>
<select name="catagory_id" id="">
@foreach( $cata  as $row)
<option value="{{$row->id}}" <?php if($row->id == $post->catagory_id)echo "selected"; ?>>{{$row->name}}</option>

@endforeach
</select>
</div>

<div class="form-group">
<label for="">new img</label>
<input type="file" name="image"class="form-control">
</div>
<div class="form-group">
<label for="">old img</label>
<img src="../{{$post->img}}" alt="" style="height:50px;width:60px">

</div>

<div class="form-group">
<label for="">details</label>
<textarea  id="" cols="30" rows="10" name="details"value="{{$post->details}} "class="form-control">{{$post->details}} </textarea>

</div>

<div class="form-group">

<input type="submit" value="update"class="btn btn-success">
</div>


</form>
</div>
@endsection('use')