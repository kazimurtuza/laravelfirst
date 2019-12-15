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
<th>catagory_name</th>
<th>slug_name</th>
<th>create_time</th>
<th>edit</th>

</tr>

</thead>
<tbody>
@foreach( $allcatagory ?? '' as $row)
<tr>
<td>{{$row->id}}</td>
<td>{{$row->name}}</td>
<td>{{$row->slug}}</td>
<td>{{$row->created_at}}</td>
<td>
<a href="{{url('edit/allcata/'.$row->id)}}" class="btn btn-success">edit</a>
</td>
<td><a href="{{url('delete/post/allcata/'.$row->id)}}" class="btn btn-danger">delete</a></td>
<td><a href="{{url('view/viewcat/'.$row->id)}}" class="btn btn-info">view</a> </td>

</tr>
@endforeach

</tbody>

</table>


</div>

@endsection
