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
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> فرم ثبت انبار جدید</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('anbar.update',['id'=>$anbar->id])}}" method="post" >
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1"> نام انبار </label>
                    <input type="text" class="form-control" value="{{ $anbar->name ?: '' }}" id="AnbarName" name="name" placeholder="نام انبار را وارد کنید">
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