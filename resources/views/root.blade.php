@extends('nav')
@section('use')
<h1 class="bg-danger">this is home page</h1>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        
        @foreach($getpost as $row)
         <p>date:{{$row->created_at}}</p>
          <h1>catagory:{{$row->name}}</h1>
          <h2>slug:{{$row->slug}}</h2>
          <h1>title:{{$row->title}}</h1>
          <img src="{{$row->img}}" alt="" style="height:200px;width:300px">
          <p>
         {{$row->details}}
          
          </p>
         
        @endforeach

        <!-- text page show  <1 2 > -->
        {{$getpost->links()}}
        
     
       
      </div>
    </div>
  </div>

  <hr>
@endsection