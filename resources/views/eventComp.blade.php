@if($event->great == 0)
                            <div class="card-text">
                                <form method="POST" action="{{ route("event.comp",compact('event','mission')) }}">
                                @csrf
                                    <input type="hidden" name="id" value="{{ $event->id }}">
                                    <button type="submit" class="btn m-0 p-1 shadow-none" name="comp">
                                        <i class="fas fa-check mr-1"></i>
                                    </button>
                                </form>
                            </div>
                        @elseif($event->great == 1)
                            <div class="card-text">
                                <form method="POST" action="{{ route("event.recomp",compact('event','mission')) }}">
                                    @csrf
                                        <input type="hidden" name="id" value="{{ $event->id }}">
                                        <button type="submit" class="btn m-0 p-1 shadow-none" name="recomp">
                                            <i class="fas fa-check mr-1 text-info"></i>
                                        </button>
                                </form>
                            </div>
                        @endif