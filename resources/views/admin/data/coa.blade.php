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
          <button data-toggle="modal" data-target="#add" class="btn btn-primary" role="button" title="Tambah Data"><i class="fas fa-plus"></i> ADD</button>
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
                    <button data-toggle="modal" data-target="#edit{{$coas->id}}" class="btn btn-success" role="button" title="EDIT DATA"><i class="fas fa-edit"></i></button>
                    <form action="{{url('/admin/coa/destroy', [$coas->id])}}" method="post" onclick = "return confirm('Do You Want To Destroy This Data?')">
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                  </form>
                  </td>
                </tr>

                <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <form action="{{url('/admin/coa/store')}}" method="POST">
                      {{ csrf_field() }}
                      @method('PUT')
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">ADD Coa</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  Parent_ID
                                  <input name="parent_id" type="parent_id" class="form-control" placeholder="Parent ID" required>
                                </div>
                            </div>
                          </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      Title
                                      <input name="title" type="title" class="form-control" placeholder="Title" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        Code
                                        <input name="code" type="code" class="form-control" placeholder="Code" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer mx-5 pt-3 mb-1">
                          <button type="dissmis" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                      </div>
                      </div>
                    </div>
                </form>
                </div>

                <div class="modal fade" id="edit{{$coas->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <form action="{{url('/admin/coa/update', [$coas->id])}}" method="POST">
                      {{ csrf_field() }}
                      @method('PUT')
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Coa</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  Parent_ID
                                    <input id = "parent_id" name="parent_id"  for="parent_id" type="parent_id" class="form-control" placeholder="{{$coas->parent_id}}" value="{{$coas->parent_id}}" >
                                </div>
                            </div>
                          </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      Title
                                        <input id = "title" name="title"  for="title" type="title" class="form-control" placeholder="{{$coas->title}}" value="{{$coas->title}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        Code
                                        <input id = "code" name="code"  for="code" type="code" class="form-control" placeholder="{{$coas->code}}" value="{{$coas->code}}" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer mx-5 pt-3 mb-1">
                          <button type="dissmis" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                      </div>
                      </div>
                    </div>
                </form>
                </div>


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
