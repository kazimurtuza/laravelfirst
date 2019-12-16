@extends('nav')
@section('use')
<h1 class="bg-danger">this is view post page</h1>

<!-- <a  href="{{route('catagorys')}}" class="btn btn-danger">catagorys</a> -->


<a  href="{{route('viewstudent')}}" class="btn btn-success">allstdent</a>
<div class="container" class="bg-danger">

<ol>
<li>name: {{$studata->name}}</li>  
<li>email : {{$studata->email}}</li>  
<li>phone: {{$studata->phon}}</li>

</ol>
</div>

@endsection
