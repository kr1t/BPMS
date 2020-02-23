<div class="form-group {{ $errors->has('urine_color') ? 'has-error' : ''}}">
    <label for="urine_color" class="control-label">{{ 'สีปัสวะ' }}</label>
    <select name="urine_color" class="form-control" id="urine_color" required>
    @foreach (json_decode('{"1":"\u0e2a\u0e35\u0e1b\u0e01\u0e15\u0e34","2":"\u0e2a\u0e35\u0e40\u0e2b\u0e25\u0e37\u0e2d\u0e07\u0e40\u0e02\u0e49\u0e21","3":"\u0e2a\u0e35\u0e40\u0e2b\u0e25\u0e37\u0e2d\u0e07\u0e1b\u0e19\u0e40\u0e25\u0e37\u0e2d\u0e14"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($check->urine_color) && $check->urine_color == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('urine_color', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('skin') ? 'has-error' : ''}}">
    <label for="skin" class="control-label">{{ 'ผิวหนัง' }}</label>
    <select name="skin" class="form-control" id="skin" required>
    @foreach (json_decode('{"1":"\u0e1c\u0e34\u0e27\u0e1b\u0e01\u0e15\u0e34","2":"\u0e1c\u0e34\u0e27\u0e41\u0e2b\u0e49\u0e07\u0e01\u0e23\u0e49\u0e32\u0e19","3":"\u0e1c\u0e34\u0e27\u0e21\u0e31\u0e19"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($check->skin) && $check->skin == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('skin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('food_type') ? 'has-error' : ''}}">
    <label for="food_type" class="control-label">{{ 'ประเภทอาหาร' }}</label>
    <select name="food_type" class="form-control" id="food_type" >
    @foreach (json_decode('{"1":"\u0e19\u0e21","2":"\u0e1c\u0e31\u0e01+\u0e19\u0e21","3":"\u0e1c\u0e31\u0e01+\u0e44\u0e02\u0e48"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($check->food_type) && $check->food_type == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('food_type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('respiratory_system') ? 'has-error' : ''}}">
    <label for="respiratory_system" class="control-label">{{ 'ระบบการหายใจ' }}</label>
    <select name="respiratory_system" class="form-control" id="respiratory_system" >
    @foreach (json_decode('{"1":"\u0e2b\u0e32\u0e22\u0e43\u0e08\u0e44\u0e14\u0e49\u0e40\u0e2d\u0e07","2":"\u0e21\u0e35\u0e40\u0e04\u0e23\u0e37\u0e48\u0e2d\u0e07\u0e0a\u0e48\u0e27\u0e22\u0e2b\u0e32\u0e22\u0e43\u0e08","3":"\u0e40\u0e08\u0e32\u0e30\u0e04\u0e2d"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($check->respiratory_system) && $check->respiratory_system == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('respiratory_system', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bedsore') ? 'has-error' : ''}}">
    <label for="bedsore" class="control-label">{{ 'แผลกดทับ' }}</label>
    <select name="bedsore" class="form-control" id="bedsore" >
    @foreach (json_decode('{"1":"\u0e01\u0e49\u0e19","2":"\u0e02\u0e49\u0e2d\u0e28\u0e2d\u0e01","3":"\u0e02\u0e49\u0e2d\u0e40\u0e17\u0e49\u0e32"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($check->bedsore) && $check->bedsore == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('bedsore', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phlegm') ? 'has-error' : ''}}">
    <label for="phlegm" class="control-label">{{ 'เสมหะ' }}</label>
    <select name="phlegm" class="form-control" id="phlegm" >
    @foreach (json_decode('{"1":"\u0e2a\u0e35\u0e43\u0e2a\u0e1b\u0e01\u0e15\u0e34","2":"\u0e2a\u0e35\u0e40\u0e2b\u0e25\u0e37\u0e2d\u0e07\u0e2d\u0e48\u0e2d\u0e19","3":"\u0e2a\u0e35\u0e40\u0e02\u0e35\u0e22\u0e27"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($check->phlegm) && $check->phlegm == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('phlegm', '<p class="help-block">:message</p>') !!}
</div>




<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'อัพเดท' }}">
</div>
