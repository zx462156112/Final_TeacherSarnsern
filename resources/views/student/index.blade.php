@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="card">
                <div class="card-header h3">แสดงรายชื่อนักศึกษา</div>

                <div class="card-body">
                    
                    <table class = "table table-striped">
                        <tr>
                            <th>คำนำหน้า</th>
                            <th>ชื่อ</th>
                            <th>สกุล</th>
                            <th>รหัสประจำตัว</th>
                            <th>รหัสกลุ่ม</th>
                            <th>สาขา</th>
                            <th>คณะ</th>
                        </tr>
                       
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
