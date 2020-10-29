@foreach($setting as $settings)
@extends('partials.admin.sidebar')
@section('title', 'Chart Of Account - Koperasi Z')
@section('container')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li class="active"><span>
          @if($settings->lang === "en")@lang('lang.en.coa')
                @elseif($settings->lang === "id")@lang('lang.id.coa')
                @elseif($settings->lang === "jp")@lang('lang.jp.coa')
                @else COA [ Chart Of Account ]
                @endif
              </span></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xl-12">
      <div class="box box-primary">
        <div class="box-header">
          <button data-toggle="modal" data-target="#add" class="btn btn-primary" role="button" title="Tambah Data"><i class="fas fa-plus"></i> 
            @if($settings->lang === "en")@lang('lang.en.add')
                @elseif($settings->lang === "id")@lang('lang.id.add')
                @elseif($settings->lang === "jp")@lang('lang.jp.add')
                @else Add
                @endif
                </button>
          </div>
          @if(Session::get('alert_message'))
                <div class="alert alert-success">
                  <strong>{{Session::get('alert_message')}}</strong>
                </div>
            @endif
            <br>
            <div class="card shadow mb-5">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
                @if($settings->lang === "en")@lang('lang.en.coa')
                @elseif($settings->lang === "id")@lang('lang.id.coa')
                @elseif($settings->lang === "jp")@lang('lang.jp.coa')
                @else COA [ Chart Of Account ]
                @endif
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="thead-dark">
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.no')
                @elseif($settings->lang === "id")@lang('lang.id.no')
                @elseif($settings->lang === "jp")@lang('lang.jp.no')
                @else No
                @endif
                </th>
                <th>
                  @if($settings->lang === "en")@lang('lang.en.numap')
          @elseif($settings->lang === "id")@lang('lang.id.numap')
          @elseif($settings->lang === "jp")@lang('lang.jp.numap')
          @else Number Approximate
          @endif
          </th>
          <th>
            @if($settings->lang === "en")@lang('lang.en.parent')
    @elseif($settings->lang === "id")@lang('lang.id.parent')
    @elseif($settings->lang === "jp")@lang('lang.jp.parent')
    @else Parent ID
    @endif
    </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.title')
                @elseif($settings->lang === "id")@lang('lang.id.title')
                @elseif($settings->lang === "jp")@lang('lang.jp.title')
                @else Title
                @endif
                </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.code')
                @elseif($settings->lang === "id")@lang('lang.id.code')
                @elseif($settings->lang === "jp")@lang('lang.jp.code')
                @else Code
                @endif
                </th>
                <th>Headdet</th>
                <th>DK</th>
                      <th text-align="center">
                        @if($settings->lang === "en")@lang('lang.en.action')
                        @elseif($settings->lang === "id")@lang('lang.id.action')
                        @elseif($settings->lang === "jp")@lang('lang.jp.action')
                        @else Action
                        @endif
                      </th>
                      

                    </tr>
                  </thead>
                  <tbody>

                @php $no=0; @endphp
                @foreach($coa as $coas)
                @php $no++; @endphp

                <tr>
                  <td>{{$no}}</td>
                  <td>{{$coas->num_approximate}}</td>
                  <td>{{$coas->parent_id}}</td>
                  <td>{{$coas->title}}</td>
                  <td >{{$coas->code}}</td>
                  <td>{{$coas->headdet}}</td>
                  <td>{{$coas->dk}}</td>
                  <td>
                    <button data-toggle="modal" data-target="#edit{{$coas->id}}" class="btn btn-success" role="button" title="EDIT DATA"><i class="fas fa-edit"></i></button><hr>
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
                          <h5 class="modal-title" id="exampleModalLabel">
                            @if($settings->lang === "en")@lang('lang.en.add')
                        @elseif($settings->lang === "id")@lang('lang.id.add')
                        @elseif($settings->lang === "jp")@lang('lang.jp.add')
                        @else Add 
                        @endif
                         </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  @if($settings->lang === "en")@lang('lang.en.numap')
          @elseif($settings->lang === "id")@lang('lang.id.numap')
          @elseif($settings->lang === "jp")@lang('lang.jp.numap')
          @else Number Approximate
          @endif
                                  <input name="num_approximate" type="num_approximate" class="form-control" placeholder="Number Approximate" required>
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  @if($settings->lang === "en")@lang('lang.en.parent')
                        @elseif($settings->lang === "id")@lang('lang.id.parent')
                        @elseif($settings->lang === "jp")@lang('lang.jp.parent')
                        @else Parent ID 
                        @endif
                                  
                                  <input name="parent_id" type="parent_id" class="form-control" placeholder="Parent ID" required>
                                </div>
                            </div>
                          </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.title')
                        @elseif($settings->lang === "id")@lang('lang.id.title')
                        @elseif($settings->lang === "jp")@lang('lang.jp.title')
                        @else Title 
                        @endif
                                      
                                      <input name="title" type="title" class="form-control" placeholder="Title" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.code')
                        @elseif($settings->lang === "id")@lang('lang.id.code')
                        @elseif($settings->lang === "jp")@lang('lang.jp.code')
                        @else Code 
                        @endif
                                        
                                        <input name="code" type="code" class="form-control" placeholder="Code" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                    Headdet
                                      <input name="headdet" type="headdet" class="form-control" placeholder="Headdet" required>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  DK
                                    <input name="dk" type="dk" class="form-control" placeholder="DK" required>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="modal-footer mx-5 pt-3 mb-1">
                          <button type="dissmis" class="btn btn-secondary" data-dismiss="modal">
                            @if($settings->lang === "en")@lang('lang.en.close')
                        @elseif($settings->lang === "id")@lang('lang.id.close')
                        @elseif($settings->lang === "jp")@lang('lang.jp.close')
                        @else Close 
                        @endif
                        </button>
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
                          <h5 class="modal-title" id="exampleModalLabel">
                            @if($settings->lang === "en")@lang('lang.en.edit')
                        @elseif($settings->lang === "id")@lang('lang.id.edit')
                        @elseif($settings->lang === "jp")@lang('lang.jp.edit')
                        @else Edit 
                        @endif
                        </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  @if($settings->lang === "en")@lang('lang.en.numap')
                        @elseif($settings->lang === "id")@lang('lang.id.numap')
                        @elseif($settings->lang === "jp")@lang('lang.jp.numap')
                        @else Number Approximate 
                        @endif
                                    <input id = "num_approximate" name="num_approximate"  for="num_approximate" type="num_approximate" class="form-control" placeholder="{{$coas->num_approximate}}" value="{{$coas->num_approximate}}" >
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  @if($settings->lang === "en")@lang('lang.en.parent')
                        @elseif($settings->lang === "id")@lang('lang.id.parent')
                        @elseif($settings->lang === "jp")@lang('lang.jp.parent')
                        @else Parent ID 
                        @endif
                                    <input id = "parent_id" name="parent_id"  for="parent_id" type="parent_id" class="form-control" placeholder="{{$coas->parent_id}}" value="{{$coas->parent_id}}" >
                                </div>
                            </div>
                          </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.title')
                        @elseif($settings->lang === "id")@lang('lang.id.title')
                        @elseif($settings->lang === "jp")@lang('lang.jp.title')
                        @else Title 
                        @endif
                                      
                                        <input id = "title" name="title"  for="title" type="title" class="form-control" placeholder="{{$coas->title}}" value="{{$coas->title}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.code')
                        @elseif($settings->lang === "id")@lang('lang.id.code')
                        @elseif($settings->lang === "jp")@lang('lang.jp.code')
                        @else Code 
                        @endif  
                                        <input id = "code" name="code"  for="code" type="code" class="form-control" placeholder="{{$coas->code}}" value="{{$coas->code}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                    Headdet
                                      <input id = "headdet" name="headdet"  for="headdet" type="headdet" class="form-control" placeholder="{{$coas->headdet}}" value="{{$coas->headdet}}" >
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                    DK
                                      <input id = "dk" name="dk"  for="dk" type="dk" class="form-control" placeholder="{{$coas->dk}}" value="{{$coas->dk}}" >
                                  </div>
                              </div>
                            </div>

                        </div>
                        <div class="modal-footer mx-5 pt-3 mb-1">
                          <button type="dissmis" class="btn btn-secondary" data-dismiss="modal">
                            @if($settings->lang === "en")@lang('lang.en.close')
                        @elseif($settings->lang === "id")@lang('lang.id.close')
                        @elseif($settings->lang === "jp")@lang('lang.jp.close')
                        @else Close 
                        @endif
                        </button>
                        <button type="submit" class="btn btn-success">
                          @if($settings->lang === "en")@lang('lang.en.save')
                        @elseif($settings->lang === "id")@lang('lang.id.save')
                        @elseif($settings->lang === "jp")@lang('lang.jp.save')
                        @else Save 
                        @endif
                        </button>
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
@endforeach
