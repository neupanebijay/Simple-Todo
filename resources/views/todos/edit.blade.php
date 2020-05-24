@extends('layouts.app')


@section('content')

<h1 class="text-center my-5"> Edit Todo </h1>
        <div class="row justify-content-center">
            <div class="column-md:6">
                <div class="card card-default">
                            
                            
                    <div class="card card-default">
                                    <div class="card-header">
                                    Edit Todo
                            
                                    </div>
                            <div class="card-body">
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                        @foreach($errors->all() as $error)
                                            <li> {{$error}} </li><br>
                                         @endforeach
                                                        
                                        </ul>

                                    </div>
                                @endif
                                    {{--  <form action="/todos/{{$todo->id}}" method="post"> --}} 
                                     <form action="{{route('todos.update',$todo->id)}}" method="post">

                                     @method('PUT')
                                         @csrf
                                          {{-- <input type="hidden" name="id" value="{{$todo->id}}"> --}}
                                            <div class="form-group">
                                                <p>
                                                                                                                    
                                                Name: 
                                                <input type="text" name="name" class="form-control" value=" {{ $todo->name }} ">
                                                 </p>
                                                 <p>
                                                 Description:
                                                 <textarea name="description" id="" cols="60" rows="5" class="form-control">{{ $todo->description}}</textarea>
                                                  </p>
                                                 <input type="submit" value="update" class="btn btn-primary btn-sm">
                                             </div>
                                     </form>

                             </div>
                     </div>
                    
                </div>

            
            </div>
                
        </div>


@endsection