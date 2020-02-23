<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            เมนู
        </div>

        <div class="card-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/home') }}">
                        หน้าแรก
                    </a>
                    <br />
                    <a href="{{ url('/nurse/patients') }}">
                        รายการผู้ป่วย
                    </a>
                    <br />
                    <a href="{{ url('/tasks') }}">
                        ปฏิทิน
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
