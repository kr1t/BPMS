<div class="row">
<div class="col col-md-4">
<div class="card">
<div class="card-header">
วัดความดัน Pressure
</div>
<div class="card-body">
<div class="form-group {{ $errors->has('SIS') ? 'has-error' : ''}}">
    <label for="SIS" class="control-label">{{ 'SIS' }}</label>
    <input class="form-control" name="SIS" type="number" id="SIS" value="{{ isset($nursecheck->SIS) ? $nursecheck->SIS : ''}}" >
    {!! $errors->first('SIS', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('DIA') ? 'has-error' : ''}}">
    <label for="DIA" class="control-label">{{ 'DIA' }}</label>
    <input class="form-control" name="DIA" type="number" id="DIA" value="{{ isset($nursecheck->DIA) ? $nursecheck->DIA : ''}}" >
    {!! $errors->first('DIA', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('BPM') ? 'has-error' : ''}}">
    <label for="BPM" class="control-label">{{ 'BPM' }}</label>
    <input class="form-control" name="BPM" type="number" id="BPM" value="{{ isset($nursecheck->BPM) ? $nursecheck->BPM : ''}}" >
    {!! $errors->first('BPM', '<p class="help-block">:message</p>') !!}
</div>
</div>
</div>
</div>
<div class="col col-md-4">
<div class="card">
<div class="card-header">
บาดแผล Wound
</div>
<div class="card-body">
<div class="form-group {{ $errors->has('wound') ? 'has-error' : ''}}">
    <textarea class="form-control" rows="5" name="wound" type="textarea" id="wound" >{{ isset($nursecheck->wound) ? $nursecheck->wound : ''}}</textarea>
    {!! $errors->first('wound', '<p class="help-block">:message</p>') !!}
</div>
</div>
</div>

</div>

<div class="col col-md-4">
<div class="card">
<div class="card-header">
การติดเชื้อ Infection
</div>
<div class="card-body">
<div class="form-group {{ $errors->has('infection') ? 'has-error' : ''}}">
    <textarea class="form-control" rows="5" name="infection" type="textarea" id="infection" >{{ isset($nursecheck->infection) ? $nursecheck->infection : ''}}</textarea>
    {!! $errors->first('infection', '<p class="help-block">:message</p>') !!}
</div>
</div>
</div>

</div>

</div>








<hr>
<div class="form-group mt-2 {{ $errors->has('tube') ? 'has-error' : ''}}">
    <select name="tube" class="form-control" id="tube" >
    @foreach (json_decode('{"1":"\u0e40\u0e1b\u0e25\u0e35\u0e48\u0e22\u0e19\u0e2a\u0e32\u0e22\u0e2d\u0e32\u0e2b\u0e32\u0e23\u0e40\u0e23\u0e35\u0e22\u0e1a\u0e23\u0e49\u0e2d\u0e22","2":"\u0e1c\u0e39\u0e49\u0e1b\u0e48\u0e27\u0e22\u0e44\u0e21\u0e48\u0e44\u0e14\u0e49\u0e43\u0e2a\u0e48\u0e2a\u0e32\u0e22\u0e2d\u0e32\u0e2b\u0e32\u0e23"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($nursecheck->tube) && $nursecheck->tube == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('tube', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="อัพเดท">
</div>
