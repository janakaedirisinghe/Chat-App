


@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="column is-8 is-offset-2">
            <div class="panel">
                <div class="panel-heading">
                    List of all Users
                </div>
                @forelse($users as $user)
                    <div>
                    <a href="/adduser/{{$user->id}}" class="panel-block" style="justify-content: space-between">
                        <div>{{$user->name}}</div>
                        <div class="button is-success">add</div>
                    </a>

                    </div>
                @empty
                    <div class="panel-block">
                        You don't have any friends
                    </div>
                @endforelse
            </div>

        </div>

    </div>







<div class="container">


   <table class="table">
       <thead>
       <tr>
           <th scope="col"> Name</th>
           <th scope="col">Action</th>

       </tr>
       </thead>
       <tbody>
       @foreach($users as $user)
       <tr>
            <td>{{$user->name}}</td>
           <td><a href="/adduser/{{$user->id}}" class="btn btn-success">Add me</a></td>
       </tr>
       @endforeach
       </tbody>
   </table>

</div>
@endsection
