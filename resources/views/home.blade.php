@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="container">

        <div class="columns is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
{{--                    <header class="card-header">--}}
{{--                        <p class="card-header-title">--}}
{{--                            Dashboard--}}
{{--                        </p>--}}
{{--                    </header>--}}

{{--                    <div class="card-content">--}}
{{--                        You are logged in!--}}
{{--                    </div>--}}
                    <div class="tabs is-toggle is-fullwidth is-small" style="justify-content: center">
                        <ul>
                            <li >
                                <a href="/chat">
                                    <span class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                    <span>Friends</span>
                                </a>
                            </li>
                            <br>
                            <li>
                                <a href="/users">
                                    <span class="icon"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
                                    <span>Add Friend</span>
                                </a>
                            </li>
                            <li>
                                <a href="/chat">
                                    <span class="icon"><i class="fa fa-mail-forward" aria-hidden="true"></i></span>
                                    <span>Chat</span>
                                </a>
                            </li>
                            <li>
                                <a href="/account">
                                    <span class="icon"><i class="fa fa-edit" aria-hidden="true"></i></span>
                                    <span>My Account</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
