
@extends('layouts.app')

   @section('content')
   <div class="jumbotron text-center">
   <h1>Welcome to Laraveli</h1>
   <p>This is a laravel App</p>

   <p><a href="{{ route('login') }}" class="btn btn-primary btn-lg" role="button">Login</a> <a href="{{ route('register') }}" class="btn btn-success btn-lg" role="button">Register</a>
   </div>
   @endsection
      
    