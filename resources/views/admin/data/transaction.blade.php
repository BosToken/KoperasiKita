@foreach($setting as $settings)
@extends('partials.admin.sidebar')
@section('title', 'Transaction - Koperasi Z')
@section('container')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li class="active"><span>@if($settings->lang === "en")@lang('lang.en.transaction')
          @elseif($settings->lang === "id")@lang('lang.id.transaction')
          @elseif($settings->lang === "jp")@lang('lang.jp.transaction')
          @else transaction
          @endif</span></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xl-12">
      <div class="box box-primary">
        <div class="box-header">
          <button data-toggle="modal" data-target="#add" class="btn btn-primary" role="button" title="Tambah Data"><i class="fas fa-plus"></i> @if($settings->lang === "en")@lang('lang.en.add')
            @elseif($settings->lang === "id")@lang('lang.id.add')
            @elseif($settings->lang === "jp")@lang('lang.jp.add')
            @else Add 
            @endif</button>
          </div>
          @if(Session::get('alert_message'))
                <div class="alert alert-success">
                  <strong>{{Session::get('alert_message')}}</strong>
                </div>
            @endif
            <br>
            <div class="card shadow mb-5">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">@if($settings->lang === "en")@lang('lang.en.transaction')
                @elseif($settings->lang === "id")@lang('lang.id.transaction')
                @elseif($settings->lang === "jp")@lang('lang.jp.transaction')
                @else transaction
                @endif</span></li>
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
                      <th>@if($settings->lang === "en")@lang('lang.en.Number Evidence')
                        @elseif($settings->lang === "id")@lang('lang.id.Number Evidence')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Number Evidence')
                        @else Number Evidence
                        @endif</th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.Type Transaction')
                        @elseif($settings->lang === "id")@lang('lang.id.Type Transaction')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Type Transaction')
                        @else Type Transaction
                        @endif
                        </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.ID Dictionary')
                        @elseif($settings->lang === "id")@lang('lang.id.ID Dictionary')
                        @elseif($settings->lang === "jp")@lang('lang.jp.ID Dictionary')
                        @else ID Dictionary
                        @endif
                        </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.Amount')
                        @elseif($settings->lang === "id")@lang('lang.id.Amount')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Amount')
                        @else Amount
                        @endif
                        </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.Operator')
                        @elseif($settings->lang === "id")@lang('lang.id.Operator')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Operator')
                        @else Operator
                        @endif
                        </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.Status')
                        @elseif($settings->lang === "id")@lang('lang.id.Status')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Status')
                        @else Status
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
                @foreach($transaction as $transactions)
                @php $no++; @endphp

                <tr>
                  <td>{{$no}}</td>
                  <td>{{$transactions->num_evidence}}</td>
                  <td>{{$transactions->type_transaction}}</td>
                  <td>{{$transactions->dictionary_id}}</td>
                  <td>{{$transactions->amount}}</td>
                  <td>{{$transactions->operator}}</td>
                  <td>{{$transactions->status}}</td>
                  <td>
                    <button data-toggle="modal" data-target="#edit{{$transactions->id}}" class="btn btn-success" role="button" title="EDIT DATA"><i class="fas fa-edit"></i></button>
                    <form action="{{url('/admin/transaction/destroy', [$transactions->id])}}" method="post" onclick = "return confirm('Do You Want To Destroy This Data?')">
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                  </form>
                  </td>
                </tr>

                <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <form action="{{url('/admin/transaction/store')}}" method="POST">
                      {{ csrf_field() }}
                      @method('PUT')
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">@if($settings->lang === "en")@lang('lang.en.add')
                            @elseif($settings->lang === "id")@lang('lang.id.add')
                            @elseif($settings->lang === "jp")@lang('lang.jp.add')
                            @else Add 
                            @endif</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
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
                                      @if($settings->lang === "en")@lang('lang.en.Type Transaction')
                                      @elseif($settings->lang === "id")@lang('lang.id.Type Transaction')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Type Transaction')
                                      @else Type Transaction
                                      @endif
                                        <input name="type_transaction" type="type_transaction" class="form-control" placeholder="Type Transaction" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.ID Dictionary')
                                      @elseif($settings->lang === "id")@lang('lang.id.ID Dictionary')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.ID Dictionary')
                                      @else ID Dictionary
                                      @endif
                                        <input name="dictionary_id" type="dictionary_id" class="form-control" placeholder="ID Dictionary" required>
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
                                      @if($settings->lang === "en")@lang('lang.en.Amount')
                                      @elseif($settings->lang === "id")@lang('lang.id.Amount')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Amount')
                                      @else Amount
                                      @endif
                                        <input name="amount" type="amount" class="form-control" placeholder="Amount" required>
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.Status')
                                      @elseif($settings->lang === "id")@lang('lang.id.Status')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Status')
                                      @else Status
                                      @endif
                                        <input name="status" type="status" class="form-control" placeholder="Status" required>
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

                <div class="modal fade" id="edit{{$transactions->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <form action="{{url('/admin/transaction/update', [$transactions->id])}}" method="POST">
                      {{ csrf_field() }}
                      @method('PUT')
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">@if($settings->lang === "en")@lang('lang.en.edit')
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
                                  @if($settings->lang === "en")@lang('lang.en.Number Evidence')
                                  @elseif($settings->lang === "id")@lang('lang.id.Number Evidence')
                                  @elseif($settings->lang === "jp")@lang('lang.jp.Number Evidence')
                                  @else Number Evidence
                                  @endif
                                    <input id = "num_evidence" name="num_evidence"  for="num_evidence" type="num_evidence" class="form-control" placeholder="{{$transactions->num_evidence}}" value="{{$transactions->num_evidence}}" >
                                </div>
                            </div>
                          </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.Type Transaction')
                                      @elseif($settings->lang === "id")@lang('lang.id.Type Transaction')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Type Transaction')
                                      @else Type Transaction
                                      @endif
                                        <input id = "type_transaction" name="type_transaction"  for="type_transaction" type="type_transaction" class="form-control" placeholder="{{$transactions->type_transaction}}" value="{{$transactions->type_transaction}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.ID Dictionary')
                                      @elseif($settings->lang === "id")@lang('lang.id.ID Dictionary')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.ID Dictionary')
                                      @else ID Dictionary
                                      @endif
                                        <input id = "dictionary_id" name="dictionary_id"  for="dictionary_id" type="num_transaction" class="form-control" placeholder="{{$transactions->dictionary_id}}" value="{{$transactions->dictionary_id}}" >
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
                                        <textarea class="form-control" aria-label="With textarea" id = "body" name="body"  for="body" type="body" value="{{$transactions->body}}">{{$transactions->body}}</textarea>
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
                                        <input id = "operator" name="operator"  for="operator" type="operator" class="form-control" placeholder="{{$transactions->operator}}" value="{{$transactions->operator}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.Amount')
                                      @elseif($settings->lang === "id")@lang('lang.id.Amount')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Amount')
                                      @else Amount
                                      @endif
                                        <input id = "amount" name="amount"  for="amount" type="amount" class="form-control" placeholder="{{$transactions->amount}}" value="{{$transactions->amount}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.Status')
                                      @elseif($settings->lang === "id")@lang('lang.id.Status')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Status')
                                      @else Status
                                      @endif
                                        <input id = "status" name="status"  for="status" type="status" class="form-control" placeholder="{{$transactions->status}}" value="{{$transactions->status}}" >
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
