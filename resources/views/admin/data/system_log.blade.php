@foreach($setting as $settings)
@extends('partials.admin.sidebar')
@section('title', 'System Log - Koperasi Z')
@section('container')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li class="active"><span>
          @if($settings->lang === "en")@lang('lang.en.System Log')
                          @elseif($settings->lang === "id")@lang('lang.id.System Log')
                          @elseif($settings->lang === "jp")@lang('lang.jp.System Log')
                          @else System Log
                          @endif </span></li>
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
                @if($settings->lang === "en")@lang('lang.en.System Log')
                          @elseif($settings->lang === "id")@lang('lang.id.System Log')
                          @elseif($settings->lang === "jp")@lang('lang.jp.System Log')
                          @else System Log
                          @endif
                        </span></li>
              </ol></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>@if($settings->lang === "en")@lang('lang.en.no')
                        @elseif($settings->lang === "id")@lang('lang.id.no')
                        @elseif($settings->lang === "jp")@lang('lang.jp.no')
                        @else No
                        @endif</th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.Create & Update')
                        @elseif($settings->lang === "id")@lang('lang.id.Create & Update')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Create & Update')
                        @else Create & Update
                        @endif
                        </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.Event')
                        @elseif($settings->lang === "id")@lang('lang.id.Event')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Event')
                        @else Event
                        @endif
                        </th>
                      <th>@if($settings->lang === "en")@lang('lang.en.Number Evidence')
                        @elseif($settings->lang === "id")@lang('lang.id.Number Evidence')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Number Evidence')
                        @else Number Evidence
                        @endif
                        </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.Number Transaction')
                        @elseif($settings->lang === "id")@lang('lang.id.Number Transaction')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Number Transaction')
                        @else Number Transaction
                        @endif
                        </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.Operator')
                        @elseif($settings->lang === "id")@lang('lang.id.Operator')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Operator')
                        @else Operator
                        @endif
                        </th>
                      <th text-align="center">@if($settings->lang === "en")@lang('lang.en.action')
                        @elseif($settings->lang === "id")@lang('lang.id.action')
                        @elseif($settings->lang === "jp")@lang('lang.jp.action')
                        @else Action
                        @endif</th>
                    </tr>
                  </thead>
                  <tbody>

                @php $no=0; @endphp
                @foreach($systemlog as $systemlogs)
                @php $no++; @endphp

                <tr>
                  <td>{{$no}}</td>
                  <td>{{$systemlogs->created_at}} --- {{$systemlogs->updated_at}}</td>
                  <td>{{$systemlogs->event}}</td>
                  <td>{{$systemlogs->num_evidence}}</td>
                  <td>{{$systemlogs->num_transaction}}</td>
                  <td>{{$systemlogs->operator}}</td>
                  <td>
                    <button data-toggle="modal" data-target="#edit{{$systemlogs->id}}" class="btn btn-success" role="button" title="EDIT DATA"><i class="fas fa-edit"></i></button>
                    <form action="{{url('/admin/system-log/destroy', [$systemlogs->id])}}" method="post" onclick = "return confirm('Do You Want To Destroy This Data?')">
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                  </form>
                  </td>
                </tr>

                <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <form action="{{url('/admin/system-log/store')}}" method="POST">
                      {{ csrf_field() }}
                      @method('PUT')
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">@if($settings->lang === "en")@lang('lang.en.add')
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
                                  @if($settings->lang === "en")@lang('lang.en.Event')
                        @elseif($settings->lang === "id")@lang('lang.id.Event')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Event')
                        @else Event
                        @endif
                                  <input name="event" type="event" class="form-control" placeholder="Event" required>
                                </div>
                            </div>
                          </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.Number Evidence')
                                      @elseif($settings->lang === "id")@lang('lang.id.Number Evidence')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Number Evidence')
                                      @else Number Evidence
                                      @endif
                                        <input name="num_evidence" type="num_evidence" class="form-control" placeholder="Number Evidence" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.Number Transaction')
                                      @elseif($settings->lang === "id")@lang('lang.id.Number Transaction')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Number Transaction')
                                      @else Number Transaction
                                      @endif
                                        <input name="num_transaction" type="num_transaction" class="form-control" placeholder="Number Transaction" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.body')
          @elseif($settings->lang === "id")@lang('lang.id.body')
          @elseif($settings->lang === "jp")@lang('lang.jp.body')
          @else Body
          @endif
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                        </div>
                                        <textarea class="form-control" aria-label="With textarea" name="body" type="body">Body</textarea>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.Operator')
                                      @elseif($settings->lang === "id")@lang('lang.id.Operator')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Operator')
                                      @else Operator
                                      @endif
                                        <input name="operator" type="operator" class="form-control" placeholder="Operator" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer mx-5 pt-3 mb-1">
                          <button type="dissmis" class="btn btn-secondary" data-dismiss="modal">@if($settings->lang === "en")@lang('lang.en.close')
                            @elseif($settings->lang === "id")@lang('lang.id.close')
                            @elseif($settings->lang === "jp")@lang('lang.jp.close')
                            @else Close
                            @endif
                          </button>
                        <button type="submit" class="btn btn-success">@if($settings->lang === "en")@lang('lang.en.save')
                          @elseif($settings->lang === "id")@lang('lang.id.save')
                          @elseif($settings->lang === "jp")@lang('lang.jp.save')
                          @else Save
                          @endif</button>
                      </div>
                      </div>
                    </div>
                </form>
                </div>

                <div class="modal fade" id="edit{{$systemlogs->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <form action="{{url('/admin/system-log/update', [$systemlogs->id])}}" method="POST">
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
                            @endif</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  @if($settings->lang === "en")@lang('lang.en.Event')
                        @elseif($settings->lang === "id")@lang('lang.id.Event')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Event')
                        @else Event
                        @endif
                                    <input id = "event" name="event"  for="event" type="event" class="form-control" placeholder="{{$systemlogs->event}}" value="{{$systemlogs->event}}" >
                                </div>
                            </div>
                          </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.Number Evidence')
                                      @elseif($settings->lang === "id")@lang('lang.id.Number Evidence')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Number Evidence')
                                      @else Number Evidence
                                      @endif
                                        <input id = "num_evidence" name="num_evidence"  for="num_evidence" type="num_evidence" class="form-control" placeholder="{{$systemlogs->num_evidence}}" value="{{$systemlogs->num_evidence}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.Number Transaction')
                                      @elseif($settings->lang === "id")@lang('lang.id.Number Transaction')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Number Transaction')
                                      @else Number Transaction
                                      @endif
                                        <input id = "num_transaction" name="num_transaction"  for="num_transaction" type="num_transaction" class="form-control" placeholder="{{$systemlogs->num_transaction}}" value="{{$systemlogs->num_transaction}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.body')
          @elseif($settings->lang === "id")@lang('lang.id.body')
          @elseif($settings->lang === "jp")@lang('lang.jp.body')
          @else Body
          @endif
                                        <div class="input-group">
                                        <div class="input-group-prepend">
                                        </div>
                                        <textarea class="form-control" aria-label="With textarea" id = "body" name="body"  for="body" type="body" value="{{$systemlogs->body}}">{{$systemlogs->body}}</textarea>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.Operator')
                                      @elseif($settings->lang === "id")@lang('lang.id.Operator')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Operator')
                                      @else Operator
                                      @endif
                                        <input id = "operator" name="operator"  for="operator" type="operator" class="form-control" placeholder="{{$systemlogs->operator}}" value="{{$systemlogs->operator}}" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer mx-5 pt-3 mb-1">
                          <button type="dissmis" class="btn btn-secondary" data-dismiss="modal">@if($settings->lang === "en")@lang('lang.en.close')
                            @elseif($settings->lang === "id")@lang('lang.id.close')
                            @elseif($settings->lang === "jp")@lang('lang.jp.close')
                            @else Close
                            @endif</button>
                        <button type="submit" class="btn btn-success">@if($settings->lang === "en")@lang('lang.en.save')
                          @elseif($settings->lang === "id")@lang('lang.id.save')
                          @elseif($settings->lang === "jp")@lang('lang.jp.save')
                          @else Save
                          @endif</button>
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
