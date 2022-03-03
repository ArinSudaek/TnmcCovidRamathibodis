@extends('layouts.app')

@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><i class="fab fa-wpforms"></i> จัดการผู้สมัคร</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">จัดการผู้สมัคร</a></li>
            <li class="breadcrumb-item active">แบบฟอร์ม</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-md-3">
             <a href="{{ route('ramathibodi.index') }}" class="btn btn-block btn-success btn-flat">
                 อาคารเรียนและปฏิบัติการรวมด้านการแพทย์และโรงเรียนพยาบาลรามาธิบดี
                 <small>
                    เริ่มฉีดจันทร์ ที่ 10 ม.ค.  65 - 31 มี.ค. 65
                 </small>
                </a>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-block btn-success btn-flat" disabled>
                    อาคารเรียนและปฏิบัติการรวมด้านการแพทย์และโรงเรียนพยาบาลรามาธิบดี
                    <small>
                        เริ่มฉีดที่...
                    </small>
               </button>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-block btn-success btn-flat" disabled>
                    อาคารเรียนและปฏิบัติการรวมด้านการแพทย์และโรงเรียนพยาบาลรามาธิบดี
                    <small>
                       เริ่มฉีดที่...
                    </small>
               </button>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-block btn-success btn-flat" disabled>
                    อาคารเรียนและปฏิบัติการรวมด้านการแพทย์และโรงเรียนพยาบาลรามาธิบดี
                    <small>
                        เริ่มฉีดที่...
                    </small>
               </button>
            </div>
        </div>
     </div>
</section>

@endsection
