@extends('layouts.app')

@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><i class="far fa-address-book"></i> รายชื่อผู้สมัคร</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('covid/volunteer') }}">จัดการผู้สมัคร</a></li>
            <li class="breadcrumb-item active">รายชื่อผู้สมัคร</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">อาสาสมัคร</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped table-bordered">
              <thead>
                  <tr>
                    <th>รหัส</th>
                    <th>คำนำหน้านาม</th>
                    <th>ชื่อ - นามสกุล</th>
                    <th>อายุ/ปี</th>
                    <th>เลขที่บัตรประชาชน</th>
                    <th>เลขที่สมาชิกสภาการพยาบาล</th>
                    <th>เลขที่ใบอนุญาตประกอบวิชาชีพ</th>
                    <th>E-mail</th>
                    <th>ตำแหน่ง</th>
                    <th>สถานที่ปฏิบัติงาน</th>
                    <th></th>
                  </tr>
              </thead>
              <tbody>
                @foreach($user as $u)
                 <tr>
                    <td> {{$loop->iteration}}</td>
                    <td> {{$u->prefix}}</td>
                    <td> {{$u->name}} {{$u->surname}}</td>
                    <td> {{$u->age}}</td>
                    <td> {{$u->id_card}}</td>
                    <td> {{$u->member_number}}</td>
                    <td> {{$u->license_number}}</td>
                    <td> {{$u->email}}</td>
                    <td> {{$u->position}}</td>
                    <td> {{$u->workplace}}</td>
                    <td>


                           <div class="row">
                            <div class="col-md-4">
                                <a class="btn btn-primary btn-sm" href="{{ url('covid/ramathibodi/'.$u->id) }}"">
                                    <i class="fas fa-eye"></i>
                                    {{-- Edit --}}
                                </a>
                           </div>
                               <div class="col-md-4">
                                    <form method="POST" action="{{ url('covid/ramathibodi/'.$u->id) }}">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button onclick="return confirm('คุณต้องการลบใช่หรือไม่ ?')" type="submit" class="btn btn-danger btn-sm"> <i class="fas fa-trash">
                                        </i>
                                        </button>
                                    </form>
                                    {{-- DELETE --}}
                               </div>
                               <div class="col-md-4">
                                    <a class="btn btn-info btn-sm" href="{{ url('covid/ramathibodi/'.$u->id.'/edit') }}"">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        {{-- Edit --}}
                                    </a>
                               </div>
                           </div>

                      </td>
                 </tr>
                 @endforeach
              </tbody>
          </table>
          <div class="d-flex justify-content-end p-2">
          {{$user->links("pagination::bootstrap-4")}}
          </div>
        </div>
        <!-- /.card-body -->

      </div>
</section>

@endsection
