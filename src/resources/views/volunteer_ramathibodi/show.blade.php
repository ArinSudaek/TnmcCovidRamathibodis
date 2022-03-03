@extends('layouts.app')

@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><i class="far fa-address-book"></i> ข้อมูลอาสาสมัคร</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('covid/volunteer') }}">จัดการผู้สมัคร</a></li>
            <li class="breadcrumb-item"><a href="{{ url('covid/ramathibodi') }}">รายชื่อ</a></li>
            <li class="breadcrumb-item active">ข้อมูลอาสาสมัคร</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="row">
      <div class="col-md-6">
        <div class="invoice p-3 mb-3">
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-6 invoice-col">
              @foreach ($user as $u)
              <p>
                คำนำหน้านาม: {{ $u->prefix }}
               </p>
                <p>ชื่อ - นามสกุล: {{ $u->name }} {{ $u->surname }} </p>
                <p>อายุ/ปี: {{ $u->age }}</p>
                <p>เลขที่บัตรประชาชน: {{ $u->id_card }} </p>
                <p>วัน/เดือน/ปีเกิด: {{$u->date_of_birth}} </p>
                <p>เลขที่บัตรประชาชน: {{$u->id_card}} </p>
                <p>เลขที่สมาชิกสภาการพยาบาล: {{$u->member_number}} </p>
                <p>เลขที่ใบอนุญาตประกอบวิชาชีพ: {{$u->license_number}} </p>
                <p>E-mail: {{$u->email}} </p>
              @endforeach
              </div>
            </div>
            <!-- /.row -->

          </div>
      </div>
      <div class="col-md-6">
        <div class="invoice p-3 mb-3">
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-6 invoice-col">
              @foreach ($user as $u)
                <p>ตำแหน่ง: {{$u->position}} </p>
                <p>สถานที่ปฏิบัติงาน: {{$u->workplace}} </p>
                <p>เบอร์โทรศัพท์: {{$u->tel}} </p>
                <p>วันที่ปฏิบัติงาน: {{$u->date_work}} </p>
                <p>ที่อยู่ปัจจุบัน: {{$u->current_address}} </p>
              @endforeach
              </div>
            </div>
            <!-- /.row -->

          </div>
      </div>
  </div>
</section>

@endsection
