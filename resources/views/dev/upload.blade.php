@extends('dev.dev')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
      Page Header
      <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
      </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="/dev/create" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              Book title:
              <br />
              <input type="text" name="title" />
              <br /><br />
              Logo:
              <br />
              <input type="file" name="image" />
              <br /><br />
              <input type="submit" value=" Save " />
              @include('layouts.error')
            </form>
          </div>
          <!-- /.box -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection