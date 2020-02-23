@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">ลงทะเบียนผู้ป่วย</div>
                <div class="card-body">
                    <a href="{{ url('/nurse/patients') }}" title="Back"
                        ><button class="btn btn-warning btn-sm">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            กลับ
                        </button></a
                    >
                    <br />
                    <br />

                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <form
                        method="POST"
                        action="{{ url('/nurse/patients') }}"
                        accept-charset="UTF-8"
                        class="form-horizontal"
                        enctype="multipart/form-data"
                    >
                        {{ csrf_field() }}

                        @include ('nurse.patients.form', ['formMode' =>
                        'create'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
