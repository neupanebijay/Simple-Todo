@extends('layouts.app')


@section('content')

        <div class="container">
        <h1 class="text-center my-5"> Create Todo </h1>
                <div class="card">
                         <div class="card-header">Todo</div>
         
                                
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
                                                                <form action="/todos" method="post">
                                                                @csrf
                                                                        <div class="form-group">
                                                                                <p>
                                                                        
                                                                                                                                
                                                                                Name: 
                                                                                <input type="text" name="name" class="form-control">
                                                                                </p>
                                                                                <p>
                                                                                Description:
                                                                                <textarea name="description" id="" cols="60" rows="5" class="form-control"></textarea>
                                                                                </p>
                                                                                <input type="submit" value="add" class="btn btn-primary btn-sm">
                                                                        </div>
                                                                </form>

                                </div>
                                
                    
                        </div>

            
                </div>
                
        </div>


@endsection