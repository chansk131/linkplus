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
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
        <tr>
          <th scope="row">{{ $category->id }}</th>
          <td>{{ $category->name }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
