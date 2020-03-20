@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <!-- @include('admin.sidebar') -->

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ผู้ป่วย#{{ $patient->uid }}</div>
                <div class="card-body">
                    <a href="{{ url('/nurse/patients') }}" title="Back"
                        ><button class="btn btn-warning btn-sm">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            กลับ
                        </button></a
                    >
                    <a
                        href="{{ url('/nurse/patients/' . $patient->id . '/edit') }}"
                        title="Edit Patient"
                        ><button class="btn btn-primary btn-sm">
                            <i
                                class="fa fa-pencil-square-o"
                                aria-hidden="true"
                            ></i>
                            อัพเดท
                        </button></a
                    >

                    <form
                        method="POST"
                        action="{{ url('nurse/patients' . '/' . $patient->id) }}"
                        accept-charset="UTF-8"
                        style="display:inline"
                    >
                        {{ method_field("DELETE") }}
                        {{ csrf_field() }}
                        <button
                            type="submit"
                            class="btn btn-danger btn-sm"
                            title="Delete Patient"
                            onclick='return confirm("Confirm delete?")'
                        >
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                            ลบ
                        </button>
                    </form>
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
            <div class="card mt-4">
                <div class="card-body">
                    <h5>ผลการตรวจเช็คอาการผู้ป่วยรายวัน</h5>
                    <a href="?m_status=0">เดือนปัจจุบัน</a> |
                    <a href="?m_status=1">ย้อนหลัง 1 เดือน</a>

                    <div class="table-responsive table-striped">
                        <table class="table">
                            <thead
                                style="background-color: #175A87; color: #fff;"
                            >
                                <tr>
                                    <td>#</td>
                                    <td>วันที่</td>
                                    <td>สีปัสวะ</td>
                                    <td>ผิวหนัง</td>
                                    <td>ประเภทอาหาร</td>
                                    <td>ระบบการหายใจ</td>
                                    <td>แผลกดทับ</td>
                                    <td>เสมหะ</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($checks as $index => $check)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        {{ $check->created_at->format('d/m/Y') }}
                                    </td>
                                    <td>
                                        {{ $check->urine_color }}
                                    </td>
                                    <td>
                                        {{ $check->skin }}
                                    </td>
                                    <td>
                                        {{ $check->food_type }}
                                    </td>
                                    <td>
                                        {{ $check->respiratory_system }}
                                    </td>
                                    <td>
                                        {{ $check->bedsore }}
                                    </td>
                                    <td>
                                        {{ $check->phlegm }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
