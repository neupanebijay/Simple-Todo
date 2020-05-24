
    @extends('layouts.app')

    @section('content')

   

        <div class="row">
            <div class="col-md-6">
                    <div class="card-body">
                    
                        <h1>Todo List</h1>
                            <ul class="list-group">
                        @foreach($todos as $todo)

                            <li class="list-group-item"> 
                            {{ $todo->name }}
                            <a href="/todos/{{ $todo->id }}" class="btn btn-secondary btn-sm float-right">View</a>
                            </li>
                        @endforeach
                        </ul>
                
                    </div>

            </div>
            
        </div>   
    @endsection

