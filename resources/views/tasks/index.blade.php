@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="card">
    <div class="card-body">
        <a href="/tasks/create" class="btn btn-primary">เพิ่มเวลาปฏิบัติงานลงปฏิทิน</a>
        <br><br>
        <div id='calendar'></div>
    </div>
    </div>
    </div>
    </div>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

@endsection

@section('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="/js/fullcalendar-2.1.1/lib/moment.min.js"></script>
<script type="text/javascript" src="/js/fullcalendar-2.1.1/fullcalendar.min.js"></script>
<script type="text/javascript" src="/js/fullcalendar-2.1.1/lang/th.js"></script>
<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
             header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,week,day',
        },
        eventLimit:true,
        lang: 'th',
            events : [
                @foreach($tasks as $task)
                {
                    title : '{{ $task->name }}',
                    start : '{{ $task->task_date }}',
                    // url : '{{ route('tasks.edit', $task->id) }}'
                },
                @endforeach
            ]
        })
    });
</script>
@endsection
