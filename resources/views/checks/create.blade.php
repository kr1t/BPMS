@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    อัพเดทอาการผู้ป่วยครั้งที่
                    {{ $isToDayCheck ? $checkCount - 1 : $checkCount }} | วันที่
                    {{ \Carbon\Carbon::now()->format('d/m/Y') }}
                    <hr />
                    ข้อมูลผู้ป่วย
                    <a href="/patients?uid={{ $patient->uid }}"
                        >#{{ $patient->uid }}</a
                    ><br />{{$patient->name}}
                </div>
                @if(!$isToDayCheck)

                <div class="card-body">
                    <!-- <a href="{{ url('/checks') }}" title="Back"
                        ><button class="btn btn-warning btn-sm">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            Back
                        </button></a
                    > -->
                    <!-- <br />
                    <br /> -->

                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <form
                        method="POST"
                        action="{{ url('/checks') }}"
                        accept-charset="UTF-8"
                        class="form-horizontal"
                        enctype="multipart/form-data"
                    >
                        {{ csrf_field() }}

                        @include ('checks.form', ['formMode' => 'create'])
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
                    </form>
                </div>
                @else
                <div class="card-body">
                    คุณได้ทำการอัพเดทข้อมูลคนไข้ประจำวันนี้แล้ว
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
