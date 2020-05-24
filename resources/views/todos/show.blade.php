
@extends('layouts.app')

@section('content')

<div class="container">
        <h1 class="text-center my-5"> {{$todo->name}} </h1>
         <div class="card">
                <div class="card-header">Details:</div>
         
                        <div class="card-body">
                                                        {{ $todo->description}}
                        </div>
                                                
	 
	        </div>
                                 <div class="btn-group mt-2" role="group" aria-label="Basic example">
		                         <a href="/todos/{{$todo->id}}/edit" class="btn btn-info mr-2">Edit</a>
                                        <form onsubmit="return confirm('Are you sure??')" action="/todos/{{ $todo->id}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                      </form>
                                 </div>  
        </div>
</div> 


                
        
@endsection