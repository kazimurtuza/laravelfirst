@extends('nav')
@section('use')
<h1 class="bg-danger">this is write post page</h1>

<!-- <a  href="{{route('catagorys')}}" class="btn btn-danger">catagorys</a> -->

<a  href="{{route('addcatagory')}}" class="btn btn-danger">addcatagory</a>
<a  href="{{route('allcatagory')}}" class="btn btn-success">allcatagory</a>
<div class="container" class="bg-danger">

<ol>
<li>category name : {{$idwisecate->name}}</li>
<li>slug name : {{$idwisecate->slug}}</li>
<li>create-time : {{$idwisecate->created_at}}</li>
</ol>


</div>

@endsection
