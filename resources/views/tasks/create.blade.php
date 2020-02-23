


@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('/tasks') }}" title="Back"
                        ><button class="btn btn-warning btn-sm">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            กลับ
                        </button></a
                    >                    <br><br>
                    <form action="{{ route('tasks.store') }}" method="post">
        {{ csrf_field() }}
        ชื่อ:
        <br />
        <input type="text" name="name" class="form-control" />
        <br /><br />
        คำอธิบาย:
        <br />
        <textarea name="description" class="form-control"></textarea>
        <br /><br />
        วันที่:
        <br />
        <input type="text" name="task_date" class="date form-control" />
        <br /><br />
        <input type="submit" value="บันทึกตารางงาน" class="btn btn-success"/>
    </form>
                </div>
            </div>
        </div>
    </div>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    @endsection

    @section('script')
   <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script>
    $(".date").datepicker({
        autoclose: true,
        dateFormat: "yy-mm-dd"
    });
</script>
    @endsection
