@extends('layouts.app')

@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><i class="far fa-address-book"></i> แก้ไขข้อมูลอาสาสมัคร</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('covid/volunteer') }}">จัดการผู้สมัคร</a></li>
            <li class="breadcrumb-item"><a href="{{ url('covid/ramathibodi') }}">รายชื่อ</a></li>
            <li class="breadcrumb-item active">แก้ไขข้อมูลอาสาสมัคร</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">รายละเอียด</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('ramathibodi.update',$user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    {{-- row1 --}}
                    <div class="row">
                        <input type="hidden" name="id" id="id" value="{{ $user->id }}">
                        <div class="form-group col-md-4">
                            <label for="prefix"><h6><b>คำนำหน้านาม</b></h6></label>
                            <input type="text" class="form-control " name="prefix" id="prefix" placeholder="คำนำหน้านาม" value="{{ $user->prefix }}" required>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name"><h6><b>ชื่อ </b></h6></label>
                            <input type="text" class="form-control " name="name" id="name" placeholder="ชื่อ" value="{{$user->name}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="surname"><h6><b>นามสกุล </b></h6></label>
                            <input type="text" class="form-control " name="surname" id="surname" placeholder="นามสกุล" value="{{$user->surname}}" required>
                        </div>
                    </div>
                    {{-- row2 --}}
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="age"><h6><b>อายุ/ปี</b></h6></label>
                            <input type="number" class="form-control " name="age" id="age"  placeholder="ระบุเฉพาะตัวเลข"  value="{{$user->age}}" required>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="date_of_birth"><h6><b>วัน/เดือน/ปีเกิด <span class="text-danger" >โปรดระบุเป็นปี พ.ศ. เช่น 27/05/2524</span></b></h6></label>
                            <input type="date" class="form-control " name="date_of_birth" id="date_of_birth"  placeholder="ตัวอย่าง 27/05/2524" value="{{$user->date_of_birth}}" required>
                        </div>
                    </div>
                    {{-- row3 --}}
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="id_card"><h6><b>เลขที่บัตรประชาชน</b></h6></label>
                            <input type="text" class="form-control " name="id_card" id="id_card" pattern=".{13,13}" placeholder="เลขที่บัตรประชาชน ระบุเฉพาะตัวเลขเท่านั้น" value="{{$user->id_card}}"  maxlength="13" required/>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="member_number"><h6><b>เลขที่สมาชิกสภาการพยาบาล</b></h6></label>
                            <input type="text" class="form-control " name="member_number" id="member_number" placeholder="เลขที่สมาชิกสภาการพยาบาล" value="{{$user->member_number}}" required>
                        </div>
                    </div>
                    {{-- row4 --}}
                    <div class="row">
                        <div class="form-group col-md-7">
                            <label for="license_number"><h6><b>เลขที่ใบอนุญาตประกอบวิชาชีพ</b></h6></label>
                            <input  class="form-control " name="license_number" pattern=".{10,10}" id="license_number" placeholder="เลขที่ใบอนุญาตประกอบวิชาชีพ 10 หลัก เป็นตัวเลขเท่านั้น" maxlength="10" value="{{$user->license_number}}" required>
                        </div>
                        <div class="form-group col-md-5">
                            <label for=""><h6><b>E-mail</b></h6></label>
                            <input type="email" class="form-control " name="email" id="email"  placeholder="exam@mail.com" value="{{$user->email}}" required>
                        </div>
                    </div>
                    {{-- row5 --}}
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="position"><h6><b>ตำแหน่ง</b></h6></label>
                            <input type="text" class="form-control " name="position"  placeholder="ตำแหน่ง" value="{{$user->position}}"  required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="workplace"><h6><b>สถานที่ปฏิบัติงาน</b></h6></label>
                            <input type="text" class="form-control " name="workplace" placeholder="สถานที่ปฏิบัติงาน" value="{{$user->workplace}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tel"><h6><b>หมายเลขโทรศัพท์มือถือ</b></h6></label>
                            <input type="text" class="form-control " name="tel" id="tel" placeholder="หมายเลขโทรศัพท์มือถือ" maxlength="10" value="{{$user->tel}}">
                        </div>
                    </div>
                    {{-- row6 --}}
                    <div class="row">
                        <div class="form-group col-md-12">
                            <div>
                                <h6>
                                    <b>วันที่ปฏิบัติงาน</b>
                                </h6>
                                <div class="form-group">
                                    <select name="check_date"class="form-control" id="check_date">
                                     @if($user->date_work)
                                     <option value="{{$user->date_work}}">{{$user->date_work}}</option>
                                     @endif

                                    @foreach ($quota as $q)
                                      <option value="{{$q->date_work}}">{{$q->date_work}}</option>
                                    @endforeach

                                    </select>
                                  </div>
                            </div>
                        </div>
                    </div>
                    {{-- row7 --}}
                    <div class="row">
                        <div class="form-group col-md-12">
                            <div>
                                <h6>
                                    <b>ที่อยู่ปัจจุบัน (สำหรับจัดส่งเอกสาร) </b>
                                </h6>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" name="current_address" id="current_address" style="height: 100px" >{{$user->current_address}}</textarea>
                                    <small class="text-danger" for="floatingTextarea2"><b>*โปรดระบุ</b></small>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="row float-right">
                        <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-success">บันทึก</button>
                        </div>
                      </div>

                </form>
            </div>
          </div>
        </div>
      </div>
</section>

@endsection
