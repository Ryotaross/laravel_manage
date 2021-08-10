@extends('app')

@section('title','イベント一覧')

@section('content')
@include('nav')
@include('mission')
    <div class="row">
            <div class="card  mx-auto col-7 my-3"  >
                <div class="card-body">
                    <h5 class="card-title">作業日</h5>
                    <div class="d-flex"> 
                        <p class="card-text">{{ $event->date  }} </p>
                    
                        @include('eventComp')

                    </div>
                    <h5 class="card-title">作業時間</h5>
                    <p class="card-text">{{ $event->time }}</p>
                    <h5 class="card-title">作業内容</h5>
                    <p class="card-text">{{ $event->content }}</p>
                    <h5 class="card-title">対象装置</h5>
                    <p class="card-text">{{ $event->equip }}</p>
                    <h5 class="card-title">運用への影響</h5>
                    <p class="card-text">{{ $event->impact }}</p>
                    <h5 class="card-title">必要なもの</h5>
                    <p class="card-text">{{ $event->thing }}</p>
                    <h5 class="card-title">その他</h5>
                    <p class="card-text">{{ $event->other }}</p>
                    <div class="d-flex justify-content-center">
                    <a href="{{ route("event.edit", compact('event','mission')) }}" class="btn btn-primary"><i class="fas fa-pen mr-1"></i>更新</a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $event->id }}"> <i class="fas fa-trash-alt mr-1"></i>削除</a>
                    </div>
                    <div id="modal-delete-{{ $event->id }}" class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <form method="POST" action="{{ route('event.destroy', compact('mission','event')) }}">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                {{ $event->date }}の作業を削除します。よろしいですか？
                            </div>
                            <div class="modal-footer justify-content-between">
                                <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                                <button type="submit" class="btn btn-danger">削除する</button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection