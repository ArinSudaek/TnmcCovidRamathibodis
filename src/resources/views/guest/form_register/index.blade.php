
@extends('layouts.general')

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="card card-light m-3">
            <div class="card-header bg-dark">
              <h3 class="card-title">
                <i class="fas fa-bullhorn"></i>
                ฟอร์มอาสาสมัคร
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                     <a href="{{ url('form/covid19/ramathibodi') }}" class="btn btn-block btn-success btn-flat">
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
            <!-- /.card-body -->
          </div>
    </div>
</section>
@endsection

@section('third_party_stylesheets')
    <style>
        body {
            background-color: whitesmoke
        }
    </style>
@endsection
