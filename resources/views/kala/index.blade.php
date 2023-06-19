@extends('app.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">لیست کالا ها</h1>
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
                @if($errors->any())
                  <div class="alert alert-danger" role="alert">
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                  </div>  
                  @endif
                  @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                      {!! session()->get('message') !!}
                    </div>  
                  @endif

                <table class="table table-bordered">
                  <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>نام کالا</th>
                    <th>انبار مربوطه</th>
                    <th>واحد شمارش</th>
                    <th>اقدامات</th>
                  </tr>

                  @foreach($kalas as $kala)
                  <tr>
                    <td>{{$kala->id}}</td>
                    <td>{{$kala->name}}</td>
                    <td>{{$kala->anbar->name}}</td>
                    <td>{{$kala->vahed}}</td>
                    <td>
                      <a class="confirmation" href="{{ route('kala.delete',['id'=>$kala->id]) }}">
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> حذف</button>
                      </a>
                    <a href="{{ route('kala.edit',['id'=>$kala->id]) }}" >
                      <button type="button" class="btn btn-success"><i class="fa fa-pencil-square-o"></i> ویرایش</button>
                    </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody></table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                {{ $kalas->links() }}  
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