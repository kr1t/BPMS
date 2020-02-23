@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">ผู้ป่วย</div>
                <div class="card-body">
                    <a
                        href="{{ url('/nurse/patients/create') }}"
                        class="btn btn-success btn-sm"
                        title="Add New Patient"
                    >
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        ลงทะเบียนผู้ป่วย
                    </a>

                    <form
                        method="GET"
                        action="{{ url('/nurse/patients') }}"
                        accept-charset="UTF-8"
                        class="form-inline my-2 my-lg-0 float-right"
                        role="search"
                    >
                        <div class="input-group">
                            <input
                                type="text"
                                class="form-control"
                                name="search"
                                placeholder="ค้นหา..."
                                value="{{ request('search') }}"
                            />
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>

                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>รหัสผู้ป่วย</th>
                                    <th>ชื่อ - นามสกุล</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($patients as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->uid }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <a
                                            href="{{ url('/nurse/patients/' . $item->uid) }}"
                                            title="View Patient"
                                            ><button
                                                class="btn btn-info btn-sm"
                                            >
                                                <i
                                                    class="fa fa-eye"
                                                    aria-hidden="true"
                                                ></i>
                                                ดูข้อมูล
                                            </button></a
                                        >
                                        <a
                                            href="{{ url('/nurse/patients/' . $item->id . '/edit') }}"
                                            title="Edit Patient"
                                            ><button
                                                class="btn btn-primary btn-sm"
                                            >
                                                <i
                                                    class="fa fa-pencil-square-o"
                                                    aria-hidden="true"
                                                ></i>
                                                อัพเดท
                                            </button></a
                                        >

                                        <form
                                            method="POST"
                                            action="{{ url('/nurse/patients' . '/' . $item->id) }}"
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
                                                <i
                                                    class="fa fa-trash-o"
                                                    aria-hidden="true"
                                                ></i>
                                                ลบ
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper">
                            {!! $patients->appends(['search' =>
                            Request::get('search')])->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
