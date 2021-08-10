@csrf
<div class="md-form">
  <input type="date" name="date" class="form-control" required value="{{$event->date ?? old('date') }}">
</div>
<div class="md-form">
  <label>時刻</label>
  <input type="text" name="time" class="form-control" required value="{{$event->time ?? old('time') }}">
</div>
<div class="form-group">
  <label>作業内容</label>
  <textarea name="content" required class="form-control" rows="6" placeholder="">{{ $event->content ?? old('content' ) }}</textarea>
</div>
<div class="form-group">
  <label>対象装置</label>
  <textarea name="equip" required class="form-control" rows="2" placeholder="">{{ $event->equip ?? old('equip') }}</textarea>
</div>
<div class="form-group">
  <label>影響</label>
  <textarea name="impact" required class="form-control" rows="6" placeholder="">{{ $event->impact ?? old('impact') }}</textarea>
</div>
<div class="form-group">
  <label>必要なもの</label>
  <textarea name="thing" required class="form-control" rows="2" placeholder="">{{ $event->thing ?? old('thing') }}</textarea>
</div>
<div class="form-group">
  <label>その他</label>
  <textarea name="other" required class="form-control" rows="2" placeholder="">{{ $event->other ?? old('other') }}</textarea>
</div>
