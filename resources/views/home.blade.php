@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">กระดานข่าว</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session("status") }}
                    </div>
                    @endif ยังไม่มีการอัพเดทใดๆ
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
