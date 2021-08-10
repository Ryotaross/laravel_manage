@extends('app')

@section('title', 'イベント登録')

@include('nav')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            @include('error_card_list')
            <div class="card-text">
              <form method="POST" action="{{ route('event.update',compact('mission','event')) }}">
                @method('PATCH')
                @include('events.form')
                <button type="submit" class="btn blue-gradient btn-block">更新</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection