@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="column is-8 is-offset-2">
                <div class="panel">
                    <div class="panel-heading">
                            {{$friend->name}}
                            <div class="contain is-pulled-right">
                                <a href="{{url('/chat')}}" class="is-link"><i class="fa fa-arrow-circle-leftt"></i>Back</a>
                            </div>
                        <chat>

                        </chat>
                    </div>
                </div>
            </div>
        </div>

@endsection