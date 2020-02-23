<div class="form-group {{ $errors->has('avatar') ? 'has-error' : ''}}">
    <label for="avatar" class="control-label">{{ "รูป" }}</label>
    <input
        class="form-control"
        name="avatar"
        type="file"
        id="avatar"
        value="{{ isset($patient->avatar) ? $patient->avatar : ''}}"
    />
    {!! $errors->first('avatar', '
    <p class="help-block">:message</p>
    ') !!}
</div>
<!-- <div class="form-group {{ $errors->has('uid') ? 'has-error' : ''}}">
    <label for="uid" class="control-label">{{ "Uid" }}</label>
    <input
        class="form-control"
        name="uid"
        type="number"
        id="uid"
        value="{{ isset($patient->uid) ? $patient->uid : ''}}"
    />
    {!! $errors->first('uid', '
    <p class="help-block">:message</p>
    ') !!}
</div> -->
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ "ชื่อ" }}</label>
    <input
        class="form-control"
        name="name"
        type="text"
        id="name"
        value="{{ isset($patient->name) ? $patient->name : ''}}"
    />
    {!! $errors->first('name', '
    <p class="help-block">:message</p>
    ') !!}
</div>
<div class="form-group {{ $errors->has('date_of_birth') ? 'has-error' : ''}}">
    <label for="date_of_birth" class="control-label">{{
        "วัน / เดือน / ปีเกิด"
    }}</label>
    <input
        class="form-control"
        name="date_of_birth"
        type="date"
        id="date_of_birth"
        value="{{ isset($patient->date_of_birth) ? $patient->date_of_birth : ''}}"
    />
    {!! $errors->first('date_of_birth', '
    <p class="help-block">:message</p>
    ') !!}
</div>
<div class="form-group {{ $errors->has('blood_type') ? 'has-error' : ''}}">
    <label for="blood_type" class="control-label">{{ "กรุ๊ปเลือด" }}</label>
    <input
        class="form-control"
        name="blood_type"
        type="text"
        id="blood_type"
        value="{{ isset($patient->blood_type) ? $patient->blood_type : ''}}"
    />
    {!! $errors->first('blood_type', '
    <p class="help-block">:message</p>
    ') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ "ที่อยู่" }}</label>
    <textarea
        class="form-control"
        rows="5"
        name="address"
        type="textarea"
        id="address"
        >{{ isset($patient->address) ? $patient->address : ''}}</textarea
    >
    {!! $errors->first('address', '
    <p class="help-block">:message</p>
    ') !!}
</div>
<div class="form-group {{ $errors->has('drug_allergy') ? 'has-error' : ''}}">
    <label for="drug_allergy" class="control-label">{{ "แพ้ยา" }}</label>
    <textarea
        class="form-control"
        rows="5"
        name="drug_allergy"
        type="textarea"
        id="drug_allergy"
        >{{ isset($patient->drug_allergy) ? $patient->drug_allergy : ''}}</textarea
    >
    {!! $errors->first('drug_allergy', '
    <p class="help-block">:message</p>
    ') !!}
</div>
<div class="form-group {{ $errors->has('symptoms') ? 'has-error' : ''}}">
    <label for="symptoms" class="control-label">{{ "อาการผู้ป่วย" }}</label>
    <textarea
        class="form-control"
        rows="5"
        name="symptoms"
        type="textarea"
        id="symptoms"
        >{{ isset($patient->symptoms) ? $patient->symptoms : ''}}</textarea
    >
    {!! $errors->first('symptoms', '
    <p class="help-block">:message</p>
    ') !!}
</div>

<div class="form-group {{ $errors->has('caregiver_name') ? 'has-error' : ''}}">
    <label for="caregiver_name" class="control-label">{{
        "ชื่อผู้ดูแลผู้ป่วย"
    }}</label>
    <input
        class="form-control"
        name="caregiver_name"
        type="text"
        id="caregiver_name"
        value="{{ isset($patient->caregiver_name) ? $patient->caregiver_name : ''}}"
    />
    {!! $errors->first('caregiver_name', '
    <p class="help-block">:message</p>
    ') !!}
</div>

<div class="form-group">
    <input
        class="btn btn-primary"
        type="submit"
        value="{{ $formMode === 'edit' ? 'อัพเดท' : 'ลงทะเบียน' }}"
    />
</div>
