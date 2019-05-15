


@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="column is-8 is-offset-2">
            <div class="panel">
                <div class="panel-heading">
                    List of all Users
                </div>
                @forelse($users as $user)
                    <?php
                       $user_id = Auth::id();
                       $friend_id = $user->id;

                       $friend = \App\Friend::where('user_id',$user_id)




                ?>


                    @if(Auth::id() != $user->id)
                        <div>
                            <a href="/adduser/{{$user->id}}" class="panel-block" style="justify-content: space-between">
                                <div>{{$user->name}}</div>
                                <div class="button is-success">
                                    add
                                </div>
                            </a>

                        </div>
                    @else
                        @continue
                    @endif

                @empty
                    <div class="panel-block">
                        You don't have any friends
                    </div>
                @endforelse
            </div>

        </div>

    </div>







@endsection
