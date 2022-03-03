
@extends('layouts.general')

@section('content')
<section class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="shadow bg-white rounded">
                        <div>
                            <img src="{{ asset('assets/images/logo/covid-20210518-2.jpg') }}" class="w-100">
                        </div>
                        <div class="row">
                            <div class="col-md-3 d-none d-lg-block ">
                                <div class=" bg-success bg-gradient sticky-top" style="height: 1000px;" align="center">
                                    <br/>
                                    <div class="p-3">
                                        <div class="card" align="center">
                                            <br/>
                                            <div align="center">
                                                <img src="{{ asset('assets/images/logo/site.png') }}"
                                                    class="card-img-top w-25">
                                                {{-- <img src="../images/LOGO.png" class="card-img-top w-25" alt="..."> --}}
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <b><span class="text-secondary">ระบบลงทะเบียน</b> </span><br/>
                                                    <b><span class="text-red">อาสาสมัคร</span></b> <span class="text-secondary">ร่วมรับมือสถานการณ์ COVID-19</span><br/><br/>

                                                    <div align='left' class="1">

                                                        <h6>
                                                            <a><span class="text-secondary">สถานที่ปฏิบัติงาน</span></b> <br/>
                                                            <a><span class="text-secondary">อาคารเรียนและปฏิบัติการรวมด้านการแพทย์และโรงเรียนพยาบาลรามาธิบดี เริ่มวันที่ 10 มกราคม 2565 ถึง 31 มีนาคม 2565เวลา 8.00 - 16.00 น.</span></a>
                                                            <br/>
                                                            <a><span class="text-secondary">อาคารเรียนและปฏิบัติการรวมด้านการแพทย์และโรงเรียนพยาบาลรามาธิบดี</span></a>
                                                            <a href="https://www.google.com/maps/d/u/0/viewer?mid=1HHx3Gn2dKys-VhRD_OKDfxOsTM4&ie=UTF8&oe=UTF8&msa=0&ll=13.767349100000008%2C100.5257298&z=18">แผนที่ อาคารเรียนและปฏิบัติการรวมด้านการแพทย์และโรงเรียนพยาบาลรามาธิบดี</a><br/>
                                                            <b><span class="text-secondary">การแต่งกาย</b><br/> <span class="text-secondary">เสื้อโปโลเหลือง/โปโลของสถาบัน กางเกงดำ/หรือชุดสุภาพ โดยต้องลงทะเบียนรับปลอกแขนพยาบาลอาสาที่จุดลงทะเบียนเวลา 7.30 น.<br/><b>อุปกรณ์ป้องกัน : </b> Face shield, glove, facemask, hair cover <br/>
                                                            <b><span class="text-secondary">อาหาร</b> : อาหารเช้า อาหารกลางวัน กาแฟ น้ำดื่ม </span><br/>
                                                            <b><span class="text-secondary">การเดินทาง</b> <br/> <span class="text-secondary">รถรับส่ง ออกจาก รพ.รามาธิบดี เวลา 7.15 น. กลับเวลา 17.00 น.</span><br/> <span class="text-secondary">รถไฟฟ้าใต้ดิน หรือเดินทางรถยนต์ส่วนตัว มีสำรองที่จอดบริเวณชั้น 3</span>
                                        </h6>
                                                    </div>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class=" bg-body rounded" style="padding:5px 25px 25px 15px;">
                                    <div class="row ">
                                        <form action="{{ route('form.ramathibodi.insert') }}" method="POST">
                                            @csrf
                                            <div class="col-md-12">
                                                <div class="border border-1 border rounded-3 p-3">
                                                    <div>
                                                        <div class="p-3 mb-2 text-white" style="background:#16784e;">
                                                            <div>
                                                                <div align="center">
                                                                    <img src="{{ asset('assets/images/logo/site_logo-edit.png') }}"
                                                                    style="width:12%;">
                                                                </div>
                                                            </div>
                                                            <br/>
                                                            <figure class="text-center">
                                                                <blockquote class="blockquote">
                                                                    <h4>
                                                                        สภาการพยาบาล<br/>
                                                                        ขอเชิญ <br/>
                                                                        ผู้ประกอบวิชาชีพการพยาบาลและการผดุงครรภ์ <br/>
                                                                        ลงทะเบียนเป็น <span class="text-red">อาสาสมัคร</span> <br/>
                                                                        ร่วมรับมือสถานการณ์ COVID-19
                                                                    </h4>
                                                                    <h5>
                                                                         <br/>
                                                                        <h4> ระหว่าง วันที่ 10 มกราคม 2565 ถึง 31 มีนาคม 2565</h4>
                                                                        <h4>  -- ณ อาคารเรียนและปฏิบัติการรวมด้านการแพทย์และโรงเรียนพยาบาลรามาธิบดี กรุงเทพมหานคร -- <h4> 
                                                                    <br/>
                                                                    <div class="p-3">
                                                                        <div class="bg-white p-3">
                                                                            <h5 class="text-danger">
                                                                                <p>
                                                                                    ผู้ลงทะเบียนกรุณาตรวจสอบวันที่ท่านสะดวกเป็นอาสาสมัครให้เรียบร้อยก่อนลงทะเบียน <br/>
                                                                                    เนื่องจากท่านจะไม่สามารถแก้ไขข้อมูลในระบบได้อีก เพื่อลดการซ้ำซ้อนของข้อมูลการลงทะเบียน
                                                                                </p>
                                                                            </h5>
                                                                        </div>
                                                                    </div>

                                                                </blockquote>
                                                            </figure>
                                                        </div>
                                                        @if (session('alert'))
                                                        <div class="alert alert-info">
                                                            {{ session('alert') }}
                                                        </div>
                                                        @endif
                                                        <br/>
                                                        <div class="row">
                                                            <div class="form-group col-md-3">
                                                                <label for="prefix"><h6><b>คำนำหน้านาม</b></h6></label>
                                                                <input type="text" class="form-control " name="prefix" id="prefix"  placeholder="คำนำหน้านาม" required>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="name"><h6><b>ชื่อ </b></h6></label>
                                                                <input type="text" class="form-control " name="name" id="name"  placeholder="ชื่อ " required>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="surname"><h6><b>นามสกุล </b></h6></label>
                                                                <input type="text" class="form-control " name="surname" id="surname"  placeholder="นามสกุล" required>
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label for="age"><h6><b>อายุ/ปี</b></h6></label>
                                                                <input type="number" class="form-control " name="age" id="age"  placeholder="ระบุเฉพาะตัวเลข" required>
                                                            </div>
                                                            <div class="form-group col-md-8">
                                                                <label for="date_of_birth"><h6><b>วัน/เดือน/ปีเกิด <span class="text-danger" >โปรดระบุเป็นปี พ.ศ. เช่น 27/05/2524</span></b></h6></label>
                                                                <input type="date" class="form-control " name="date_of_birth" id="date_of_birth"  placeholder="ตัวอย่าง 27/05/2524" required>
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="id_card"><h6><b>เลขที่บัตรประชาชน</b></h6></label>
                                                                <input type="text" class="form-control " name="id_card" id="id_card" pattern=".{13,13}"  placeholder="เลขที่บัตรประชาชน ระบุเฉพาะตัวเลขเท่านั้น"  maxlength="13" required/>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="member_number"><h6><b>เลขที่สมาชิกสภาการพยาบาล</b></h6></label>
                                                                <input type="text" class="form-control " name="member_number" id="member_number"  placeholder="เลขที่สมาชิกสภาการพยาบาล" required>
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="form-group col-md-7">
                                                                <label for="license_number"><h6><b>เลขที่ใบอนุญาตประกอบวิชาชีพ</b></h6></label>
                                                                <input  class="form-control " name="license_number" pattern=".{10,10}" id="license_number"  placeholder="เลขที่ใบอนุญาตประกอบวิชาชีพ 10 หลัก เป็นตัวเลขเท่านั้น" maxlength="10" required>
                                                            </div>
                                                            <div class="form-group col-md-5">
                                                                <label for=""><h6><b>E-mail</b></h6></label>
                                                                <input type="email" class="form-control " name="email" id="email"  placeholder="exam@mail.com"  required>
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="position"><h6><b>ตำแหน่ง</b></h6></label>
                                                                <input type="text" class="form-control " name="position"  placeholder="ตำแหน่ง"  required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="workplace"><h6><b>สถานที่ปฏิบัติงาน</b></h6></label>
                                                                <input type="text" class="form-control " name="workplace"  placeholder="สถานที่ปฏิบัติงาน"  required>
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="tel"><h6><b>หมายเลขโทรศัพท์มือถือ</b></h6></label>
                                                                <input type="text" class="form-control " name="tel" id="user_mobile"  placeholder="หมายเลขโทรศัพท์มือถือ" maxlength="10">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        {{-- <div class="row">
                                                            <div class="form-group col-md-12">
                                                                <div>
                                                                    <h6>
                                                                        <b>วันที่ปฏิบัติงาน</b>
                                                                    </h6>
                                                                    <div class="form-group">
                                                                        <select name="check_date"class="form-control" id="check_date">
                                                                            <option value="" > -- กรุณาเลือกวันที่ วันที่ปฏิบัติงาน --</option>
                                                                            @foreach($quota as $q)
                                                                                 <option value="{{$q->date_work}}">วันที่ {{$q->date_work}} - จำนวนโควต้า {{$q->amount}} ท่าน </option>
                                                                            @endforeach
                                                                        </select>
                                                                      </div>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        <br>
                                                        <div class="row">
                                                            <div class="form-group col-md-12">
                                                                <div>
                                                                    <h6>
                                                                        <b>ที่อยู่ปัจจุบัน (สำหรับจัดส่งเอกสาร) </b>
                                                                    </h6>
                                                                    <div class="form-floating">
                                                                        <textarea class="form-control" placeholder="Leave a comment here" name="current_address" id="current_address" style="height: 100px"></textarea>
                                                                        <label for="floatingTextarea2">โปรดระบุ</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="border border-1 border rounded-3 p-3">
                                                    <div class="p-3 mb-2 bg-success bg-gradient text-white">
                                                        <h5>
                                                            <b>วันที่ปฏิบัติงาน</b>
                                                        </h5>
                                                    </div>
                                                    <br/>
                                                    <div>
                                                        <table class="table table-hover table-bordered">
                                                            <thead class="">
                                                                <tr>
                                                                    <td class="text-center"><h5><b>เลือกวันที่ปฏิบัติงาน</b></h5></td>
                                                                    <td class="text-center"><h5><b>โควต้าคงเหลือ/วัน</b></h5></td>
                                                                </tr>
                                                            </thead>
                                                            @foreach( $quota as $q)
                                                            <tr>
                                                                <td><div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="check_date" id="check_date" value="{{$q->date_work}}">
                                                                    <label class="form-check-label">{{$q->date_work}}</label>
                                                                  </div> </td>
                                                                <td>{{$q->amount}} </td>
                                                            </tr>
                                                            @endforeach
                                                        </table>
                                                    </div>
                                                    <br/>
                                                </div>
                                                <br/><br/>
                                                <div class="border border-1 border rounded-3 p-3">
                                                    <div class="p-3 mb-2 bg-success bg-gradient text-white">
                                                        <h5>
                                                            <b>หมายเหตุ</b>
                                                        </h5>
                                                    </div>
                                                    <div class="p-3">
                                                        <ul>
                                                            <li><h5>ผู้ลงทะเบียนกรุณาตรวจสอบวันที่ท่านสะดวกเป็นอาสาสมัครให้เรียบร้อยก่อนลงทะเบียน เนื่องจากท่านจะไม่สามารถแก้ไขข้อมูลในระบบได้อีก เพื่อลดการซ้ำซ้อนของข้อมูลการลงทะเบียน</h5></li>
                                                            <li><h5>พยาบาลอาสาที่ได้อาสาปฏิบัติงานในครั้งนี้จะได้รับ CNEU วันละ 5 หน่วยคะแนน เพื่อรักษาสิทธิ์ของท่าน กรุณาตรวจสอบข้อมูลต่าง ๆ เช่น เลขที่ใบอนุญาตฯ เลขที่สมาชิก ให้ถูกต้องก่อนกดส่งข้อมูล</h5></li>
                                                            <li><h5>กรุณานำบัตรประชาชนมาเพื่อลงทะเบียนเข้าปฏิบัติงาน</h5></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="border border-1 border rounded-3 p-3">
                                                    <div class="p-3 mb-2 bg-success bg-gradient text-white">
                                                        <h5>
                                                            <b>ผู้ประสานงาน</b>
                                                        </h5>
                                                    </div>
                                                    <div class="p-3">
                                                        <ul>
                                                            <li><h5>นางสาวโสรัจจ์ จันทรเสนีย์ 0 2596 7580</h5></li>
                                                            <li><h5>นางพรวลัย ประเสริฐวุฒิวัฒนา 0 2596 7524</h5></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <br/><br/><br/>
                                                <div class="d-grid gap-2" >
                                                    <button class="btn btn-danger btn-lg btn-block">ยืนยันลงทะเบียน </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <br/><br/>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
    </div>
</section>
@endsection
