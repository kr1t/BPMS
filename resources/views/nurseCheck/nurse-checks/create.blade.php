@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <!-- @include('admin.sidebar') -->

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    ตรวจผู้ป่วยประจำวันที่
                    {{ \Carbon\Carbon::now()->format('d/m/Y') }}
                    <hr />
                    ข้อมูลผู้ป่วย
                    <a href="/patients?uid={{ $patient->uid }}"
                        >#{{ $patient->uid }}</a
                    ><br />คุณ {{$patient->name}}
                </div>
                <div class="card-body">
                    <!-- <a href="{{ url('/NurseCheck/nurse-checks') }}" title="Back"
                        ><button class="btn btn-warning btn-sm">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            Back
                        </button></a
                    > -->

                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <form
                        method="POST"
                        action="{{ url('/nurse-check') }}"
                        accept-charset="UTF-8"
                        class="form-horizontal"
                        enctype="multipart/form-data"
                    >
                        {{ csrf_field() }}
                        <input
                            type="hidden"
                            name="patient_id"
                            value="{{$patient->id}}"
                        />
                        <input
                            type="hidden"
                            name="patient_uid"
                            value="{{$patient->uid}}"
                        />
                        @include ('nurseCheck.nurse-checks.form', ['formMode' =>
                        'create'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
