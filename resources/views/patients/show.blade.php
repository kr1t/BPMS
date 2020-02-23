@extends('layouts.app') @section('content')
<div class="container">
    @if($patient)
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ผู้ป่วย#{{ $patient->uid }}</div>
                <div class="card-body">
                    <a
                        href="/checks/create?patient_uid={{$patient->uid}}"
                        class="btn btn-primary"
                        >อัพเดทอาการผู้ป่วย</a
                    >
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>รหัสผู้ป่วย</th>
                                    <td>{{ $patient->uid }}</td>
                                </tr>
                                <tr>
                                    <th>ภาพผู้ป่วย</th>
                                    <td>
                                        <img
                                            src="/storage/{{ $patient->avatar }}"
                                            height="150"
                                            alt=""
                                        />
                                    </td>
                                </tr>

                                <tr>
                                    <th>ชื่อ - นามสกุล</th>
                                    <td>{{ $patient->name }}</td>
                                </tr>

                                <tr>
                                    <th>วัน / เดือน / ปีเกิด</th>
                                    <td>
                                        {{date('d / m / Y', strtotime($patient->date_of_birth))}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>กรุ๊ปเลือด</th>
                                    <td>
                                        {{$patient->blood_type}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>ที่อยู่</th>
                                    <td>
                                        {{$patient->address}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>แพ้ยา</th>
                                    <td>
                                        {{$patient->drug_allergy}}
                                    </td>
                                </tr>

                                <tr>
                                    <th>อาการผู้ป่วย</th>
                                    <td>
                                        {{$patient->symptoms}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>ชื่อผู้ดูแลผู้ป่วย</th>
                                    <td>
                                        {{$patient->caregiver_name}}
                                    </td>
                                </tr>

                                <tr>
                                    <th>พยาบาลที่ดูแล</th>
                                    <td>
                                        {{$patient->user->uid
                                        }}
                                        : {{$patient->user->name}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">แจ้งเตือนจากระบบ</div>

                    <div class="card-body">
                        ขออภัยเราไม่พบผู้ปวยรหัส#{{request()->uid}}
                        <hr />
                        กรุณาทำการค้นหาใหม่

                        <a href="/">คลิก! กลับไปค้นหาใหม่</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
</div>
@endsection
