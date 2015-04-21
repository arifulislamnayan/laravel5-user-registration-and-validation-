@extends('layouts.default')


<div class="container">
 
 <div>
 	
 @if(Auth::check())

 <h1> Welcome <h4>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h4> </h1>
  @endif

 </div>
	


</div>