@extends('nav')
@section('use')

<h1 class="bg-danger">all students</h1>
<div class="container">
<table class="table">
<thead>
<tr>
<th>SL</th>
<th>name</th>
<th>email</th>
<th>phon</th>
<th>edit</th>

</tr>

</thead>
<tbody>
@foreach( $studata as $row)
<tr>
<td>{{$row->id}}</td>
<td>{{$row->name}}</td>
<td>{{$row->email}}</td>
<td>{{$row->phon}}</td>
<td>
<a href="{{url('editstu/'.$row->id)}}" class="btn btn-success">edit</a>
</td>
<td><a href="{{url('deleteidwisestu/'.$row->id)}}" class="btn btn-danger">delete</a></td>
<td><a href="{{url('viewstudent/'.$row->id)}}" class="btn btn-info">view</a> </td>

</tr>
@endforeach

</tbody>

</table>


</div>

@endsection
