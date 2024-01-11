@extends('layout.app')

@section('content')

 <div class="p-5 d-flex justify-content-center align-items-center" >

 <div class="text-center">
 <h1 class="mt-5"> Welcome to Model POS Project </h1>
 <div >
 <a href="{{url("/userLogin")}}" class="btn float-center bg-gradient-secondary mt-5">Start Here</a>
 </div>

 </div>
 
 </div>

@endsection
