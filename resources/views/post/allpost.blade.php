@extends('nav')
@section('use')
<a  href="{{route('addcatagory')}}" class="btn btn-danger">addcatagory</a>
<a  href="{{route('allcatagory')}}" class="btn btn-success">allcatagory</a>
<a  href="{{route('allpost')}}" class="btn btn-info">allpost</a>
<h1 class="bg-danger">all caltagory</h1>
<div class="container">
<table class="table">
<thead>
<tr>
<th>SL</th>
<th>catagory_id</th>
<th>title</th>
<th>details</th>
<th>image</th>
<th>create_time</th>
<th>edit</th>

</tr>

</thead>
<tbody>
@foreach( $data  as $rowa)
<tr>
<td>{{$rowa->id}}</td>
<td>{{$rowa->name}}</td>
<td>{{$rowa->title}}</td>
<td>{{$rowa->details}}</td>
<td>{{$rowa->created_at}}</td>
<td><a href="{{$rowa->img}}"><img src="{{$rowa->img}}" alt="noimage" style="height:60px; width:60px"></a></td>
<td>
<a href="{{url('editwritepost/'.$rowa->id)}}" class="btn btn-success">edit</a>
</td>
<td><a href="{{url('deletepost/'.$rowa->id)}}" class="btn btn-danger">delete</a></td>
<td><a href="{{url('viewpost/'.$rowa->id)}}" class="btn btn-info">view</a> </td>

</tr>
@endforeach

</tbody>

</table>


</div>

@endsection
