@csrf
<div class="md-form">
  <label>工事名</label>
  <input type="text" name="name" class="form-control" required value="{{$mission->name ?? old('title') }}">
</div>
<div class="form-group">
  <label></label>
  <textarea name="memo" required class="form-control" rows="16" placeholder="メモ">{{ $mission->memo ?? old('body') }}</textarea>
</div>