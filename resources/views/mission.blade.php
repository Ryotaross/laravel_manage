<div class="container">
<div class="card text-center  mx-auto col-11 my-3" >
  <div class="card-body">
    <h5 class="card-title"><a href="{{ route("mission.edit",compact('mission')) }}">{{ $mission->name }}</a></h5>
    <p class="card-text">{{ $mission->memo }}</p>
    <a href="{{ route("event.create",compact('mission')) }}" class="btn btn-primary">新規作成</a>
  </div>
</div>