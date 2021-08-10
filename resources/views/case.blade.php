<div class="card  mx-auto col-5 my-3">
                <div class="card-body">
                    <div class="d-flex">
                        <h5 class="card-title">{{ $mission->name }} </h5>
                        
                        @if($mission->great == 0)
                            <div class="card-text">
                                <form method="POST" action="/comp">
                                @csrf
                                    <input type="hidden" name="id" value="{{ $mission->id }}">
                                    <button type="submit" class="btn m-0 p-1 shadow-none" name="comp">
                                        <i class="fas fa-check mr-1"></i>
                                    </button>
                                </form>
                            </div>
                        @elseif($mission->great == 1)
                            <div class="card-text">
                                <form method="POST" action="/recomp">
                                    @csrf
                                        <input type="hidden" name="id" value="{{ $mission->id }}">
                                        <button type="submit" class="btn m-0 p-1 shadow-none" name="recomp">
                                            <i class="fas fa-check mr-1 text-info"></i>
                                        </button>
                                </form>
                            </div>
                        @endif

                    </div>
                    <p class="card-text">{{ $mission->memo }}</p>
                    
                    @foreach($events as $event)
                        @if($mission->id === $event->mission_id && $event->great == 0) 
                            <div class="card text-center mx-auto col-8 my-2 ">
                                <a href = "{{ route("event.show",compact('event','mission')) }}">
                                    <div class="card-body">
                                        <p class="card-text">{{ $event->date }}</h5>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                    <div class="text-center">
                        <a href="{{ route('event.index',['mission'=>$mission]) }}" class="btn btn-primary"><i class="far fa-sticky-note mr-1"></i>詳細</a>
                        <a href="{{ route("mission.edit", ['mission' => $mission]) }}" class="btn btn-primary"><i class="fas fa-pen mr-1"></i>更新</a>
                        <a class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $mission->id }}"> <i class="fas fa-trash-alt mr-1"></i>削除</a>
                    </div>
                    <div id="modal-delete-{{ $mission->id }}" class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <form method="POST" action="{{ route('mission.destroy', ['mission' => $mission]) }}">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                {{ $mission->name }}を削除します。よろしいですか？
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