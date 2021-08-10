@extends('app')

@section('title','案件一覧')

@section('content')
@include('nav')
<div class="container">
        <ul class="nav justify-content-center my-3 border-bottom border-4">
            <li class="nav-item">
                <a class="nav-link active h2 text-secondary"  href="/">予定</a>
            </li>
            <li class="nav-item">
                <a class="nav-link h2" href="/finish">実行済</a>
            </li>
        </ul>
        <div class="row">
        @foreach($missions as $mission) 
            @if($mission->great === 0)
                @include('case')
            @endif
        @endforeach
    </div>
</div>
@endsection
