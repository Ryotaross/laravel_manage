@extends('app')

@section('title','イベント一覧')

@section('content')
@include('nav')
@include('mission')
<div class="container">
    {{--
    <ul class="nav justify-content-center my-3 border-bottom border-4">
        <li class="nav-item">
            <a class="nav-link h2 text-secondary active"  href="{{ route('event.index',['mission'=>$mission]) }}">予定</a>
        </li>
        <li class="nav-item">
            <a class="nav-link h2" href="{{ route('event.finish',['mission'=>$mission]) }}">実行済</a>
        </li>
    </ul>
    --}}
    <div class="row">
        @foreach($events as $event) 
            
                @include('event')
           
        @endforeach
    </div>
</div>
@endsection
