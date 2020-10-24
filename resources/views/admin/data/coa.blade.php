@extends('partials.admin.sidebar')
@section('title', 'Chart Of Account - Koperasi Z')
@section('container')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li class="active">Admin - <span>COA [ Chart Of Account ]</span></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xl-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="/create_event" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i>ADD</a>
          </div>
          @if(Session::get('alert_message'))
                <div class="alert alert-success">
                  <strong>{{Session::get('alert_message')}}</strong>
                </div>
            @endif
            <br>
            <div class="card shadow mb-5">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">COA [ Chart Of Account ]</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Title</th>
                      <th>Code</th>
                      <th text-align="center">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                @php $no=0; @endphp
                @foreach($coa as $coas)
                @php $no++; @endphp

                <tr>
                  <td>{{$no}}</td>
                  <td>{{$coas->title}}</td>
                  <td>{{$coas->code}}</td>
                  <td>
                    <a href="{{url('/coa/edit/'.$coas->id)}}" class="btn btn-success" role="button" title="EDIT DATA"><i class="fas fa-edit"></i></a>
                    <a href="{{url('/coa/hapus/'.$coas->id)}}" class="btn btn-danger" role="button" title="DELETE DATA"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>


                </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div> 
    </section>
  </div>
</div>

@stop
