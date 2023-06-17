@extends('app.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ثبت انبار جدید</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
      <div class="col-md-6">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">جدول ۱</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>نام</th>
                    <th style="width: 40px">اقدامات</th>
                  </tr>

                  @foreach($anbars as $anbar)
                  <tr>
                    <td>{{$anbar->id}}</td>
                    <td>{{$anbar->name}}</td>
                    <td><span class="badge bg-danger">۵۵%</span></td>
                  </tr>
                  @endforeach
                </tbody></table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                {{ $anbars->links() }}  
              <!-- <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">۱</a></li>
                  <li class="page-item"><a class="page-link" href="#">۲</a></li>
                  <li class="page-item"><a class="page-link" href="#">۳</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul> -->
              </div>
            </div>

      </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection