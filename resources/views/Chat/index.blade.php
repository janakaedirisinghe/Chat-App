@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="column is-8 is-offset-2">
            <div class="panel">
                <div class="panel-heading">
                    List of all Friends
                </div>
                @forelse($friends as $friend)
                    <a href="{{route('chat.show',$friend->id)}}" class="panel-block" style="justify-content: space-between">




                        <div ><?php  imageFriend($friend) ;?> {{$friend->name}}</div>


                        <onlineuser v-bind:friend="{{$friend}}" v-bind:onlineUsers="onlineUsers">

                        </onlineuser>
                    </a>

                    @empty
                    <div class="panel-block">
                        You don't have any friends
                    </div>
                @endforelse
            </div>

        </div>

    </div>


    <?php

    function imageFriend($friend){
    if (Storage::disk('local')->has($friend->name . '-' . $friend->id. '.jpg')){
    ?>
    <figure class="image is-32x32">
            <img src="{{ route('account.image', ['filename' => $friend->name . '-' . $friend->id . '.jpg']) }}" alt="" class="is-rounded"  >
    </figure>
    <?php
    }else{ ?>
    <figure class="image is-32x32">
    <img src="{{ route('account.image', ['filename' => 'guest.png']) }}" alt="" class="is-rounded"  >
    </figure>
    <?php

    }

    }




    ?>
    @endsection