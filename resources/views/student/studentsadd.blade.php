@extends('nav')
@section('use')
<h1 class="bg-danger">this is write post page</h1>

<!-- <a  href="{{route('catagorys')}}" class="btn btn-danger">catagorys</a> -->
<div class="container">
<a  href="{{route('viewstudent')}}" class="btn btn-danger">view students</a>

<div class="container" class="bg-danger">



<form action="{{route('storestudent')}}" method="post">
 @csrf
<div class="form-group">
<label for="">name</label>
<input type="text" name="name" class="form-control">
</div>

<div class="form-group">
<label for="">email</label>
<input type="text" name="email" class="form-control">
</div>

<div class="form-group">
<label for="">phone</label>
<input type="text" name="phon" class="form-control">
</div>

<div class="form-group">
<input type="submit" class="btn btn-success">
</div>


</form>
</div>

</div>


@endsection
