@extends('app.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ثبت درخواست کالا</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid d-flex justify-content-center">
      
      <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> فرم ثبت کالا جدید</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('kala.store')}}" method="post" >
                @csrf
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="title"> نام کالا </label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="عنوان درخواست را وارد کنید">
                  </div>

                  <div class="form-group col-3">
                    <label for="department"> بخش مربوط به درخواست </label>
                    <input type="text" class="form-control" id="department" name="department" placeholder="واحد مربوطه را وارد کنید">
                  </div>

                  <div class="form-group col-3">
                    <label>انبار مربوطه</label>
                    <select class="form-control select2" name="anbar_id" style="width: 100%;">
                      @foreach ($anbars as $anbar)
                        <option value="{{$anbar->id}}">{{$anbar->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                

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
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">ثبت</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

      </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection