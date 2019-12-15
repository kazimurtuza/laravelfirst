@extends('nav')
@section('use')
<h1 class="bg-danger">this is view post page</h1>

<!-- <a  href="{{route('catagorys')}}" class="btn btn-danger">catagorys</a> -->

<a  href="{{route('addcatagory')}}" class="btn btn-danger">addcatagory</a>
<a  href="{{route('allcatagory')}}" class="btn btn-success">allcatagory</a>
<div class="container" class="bg-danger">

<ol>
<li>date: {{$data->created_at}}</li>  
<li>category name : {{$data->name}}</li>  
<li>post title: {{$data->title}}</li>
<li> <img src="../{{$data->img}} " alt="" style="height:300px; width:300px"> </li>
<!-- <td><img src='../public/frontend/image/5df296156109d.jpg'  alt="noimage" style="height:60px; width:60px"></td>
<td> -->

<h1>details</h1>
<p>
{{$data->details}}
</p>
</ol>


</div>

@endsection
