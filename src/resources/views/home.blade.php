@extends('layouts.app')

@section('content')

<section class="content-header">
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><i class="fas fa-home"></i> หน้าหลัก</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
          <li class="breadcrumb-item active">ยินดีต้อนรับ</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
<div class="container-fluid p-3">
    <div class="callout callout-success">
        <h5>ยินดีต้อนรับ!</h5>
        <p>เข้าสู่ระบบ TNMC.</p>
    </div>
</div>
</section>
@endsection
