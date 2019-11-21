@extends('layouts.app')

@section('content')
   
   <div class="center jumbotron">
       <div class="text-center">
           <h1>Welcome to the Microposts</h1>
           {!! link_to_route('sign.get','Sign up',[],['btn btn-lg btn-primary']) !!}
       </div>
   </div>

@endsection