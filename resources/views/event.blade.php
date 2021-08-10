<div class="card  mx-auto col-5 my-3 date_judge">
                <div class="card-body">
                    <div class="d-flex">
                        <h5 class="card-title get_date">{{ $event->date  }} </h5>

                        @include('eventComp')

                    </div>

                    <p class="card-text">{{ $event->content }}</p>
                    <a href="{{ route("event.show",compact('event','mission')) }}" class="btn btn-primary"><i class="far fa-sticky-note mr-1"></i>詳細</a>
                    <a href="{{ route("event.edit", compact('event','mission')) }}" class="btn btn-primary"><i class="fas fa-pen mr-1"></i>更新</a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $event->id }}"> <i class="fas fa-trash-alt mr-1"></i>削除</a>

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