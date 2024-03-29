@foreach($setting as $settings)
@extends('partials.admin.sidebar')
@section('title', 'Posting - Koperasi Z')
@section('container')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li class="active"><span>@if($settings->lang === "en")@lang('lang.en.add')
          @elseif($settings->lang === "id")@lang('lang.id.Posting')
          @elseif($settings->lang === "jp")@lang('lang.jp.Posting')
          @else Posting 
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
              <h6 class="m-0 font-weight-bold text-primary">@if($settings->lang === "en")@lang('lang.en.add')
                @elseif($settings->lang === "id")@lang('lang.id.Posting')
                @elseif($settings->lang === "jp")@lang('lang.jp.Posting')
                @else Posting 
                @endif
              </h6>
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
                        @if($settings->lang === "en")@lang('lang.en.Preiod')
                        @elseif($settings->lang === "id")@lang('lang.id.Preiod')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Preiod')
                        @else Preiod
                        @endif
                        </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.Beginning Balance')
                        @elseif($settings->lang === "id")@lang('lang.id.Beginning Balance')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Beginning Balance')
                        @else Beginning Balance
                        @endif
                        </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.Debit Mutation')
                        @elseif($settings->lang === "id")@lang('lang.id.Debit Mutation')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Debit Mutation')
                        @else Debit Mutation
                        @endif
                        </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.Credit Mutation')
                        @elseif($settings->lang === "id")@lang('lang.id.Credit Mutation')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Credit Mutation')
                        @else Credit Mutation
                        @endif
                        </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.Ending Balance')
                        @elseif($settings->lang === "id")@lang('lang.id.Ending Balance')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Ending Balance')
                        @else Ending Balance
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
                @foreach($post as $posts)
                @php $no++; @endphp

                <tr>
                  <td>{{$no}}</td>
                  <td>{{$posts->period}}</td>
                  <td>{{$posts->beginning_balance}}</td>
                  <td>{{$posts->debit_mutation}}</td>
                  <td>{{$posts->credit_mutation}}</td>
                  <td>{{$posts->ending_balance}}</td>
                  <td>
                    <button data-toggle="modal" data-target="#edit{{$posts->id}}" class="btn btn-success" role="button" title="EDIT DATA"><i class="fas fa-edit"></i></button>
                    <form action="{{url('/admin/post/destroy', [$posts->id])}}" method="post" onclick = "return confirm('Do You Want To Destroy This Data?')">
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                  </form>
                  </td>
                </tr>

                <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <form action="{{url('/admin/post/store')}}" method="POST">
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
                                  @if($settings->lang === "en")@lang('lang.en.Preiod')
                        @elseif($settings->lang === "id")@lang('lang.id.Preiod')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Preiod')
                        @else Preiod
                        @endif
                                  <input name="period" type="period" class="form-control" placeholder="Period" required>
                                </div>
                            </div>
                          </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.Beginning Balance')
                                      @elseif($settings->lang === "id")@lang('lang.id.Beginning Balance')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Beginning Balance')
                                      @else Beginning Balance
                                      @endif
                                        <input name="beginning_balance" type="beginning_balance" class="form-control" placeholder="Beginning Balance" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.Debit Mutation')
                                      @elseif($settings->lang === "id")@lang('lang.id.Debit Mutation')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Debit Mutation')
                                      @else Debit Mutation
                                      @endif
                                        <input name="debit_mutation" type="debit_mutation" class="form-control" placeholder="Debit Mutation" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.Credit Mutation')
                                      @elseif($settings->lang === "id")@lang('lang.id.Credit Mutation')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Credit Mutation')
                                      @else Credit Mutation
                                      @endif
                                        <input name="credit_mutation" type="credit_mutation" class="form-control" placeholder="Credit Mutation" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.Ending Balance')
                                      @elseif($settings->lang === "id")@lang('lang.id.Ending Balance')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Ending Balance')
                                      @else Ending Balance
                                      @endif
                                        <input name="ending_balance" type="ending_balance" class="form-control" placeholder="Ending Balance" required>
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

                <div class="modal fade" id="edit{{$posts->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <form action="{{url('/admin/post/update', [$posts->id])}}" method="POST">
                      {{ csrf_field() }}
                      @method('PUT')
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">@if($settings->lang === "en")@lang('lang.en.edit')
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
                                  @if($settings->lang === "en")@lang('lang.en.Preiod')
                        @elseif($settings->lang === "id")@lang('lang.id.Preiod')
                        @elseif($settings->lang === "jp")@lang('lang.jp.Preiod')
                        @else Preiod
                        @endif
                                    <input id = "period" name="period"  for="period" type="period" class="form-control" placeholder="{{$posts->period}}" value="{{$posts->period}}" >
                                </div>
                            </div>
                          </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.Beginning Balance')
                                      @elseif($settings->lang === "id")@lang('lang.id.Beginning Balance')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Beginning Balance')
                                      @else Beginning Balance
                                      @endif
                                        <input id = "beginning_balance" name="beginning_balance"  for="beginning_balance" type="beginning_balance" class="form-control" placeholder="{{$posts->beginning_balance}}" value="{{$posts->beginning_balance}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.Debit Mutation')
                                      @elseif($settings->lang === "id")@lang('lang.id.Debit Mutation')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Debit Mutation')
                                      @else Debit Mutation
                                      @endif
                                        <input id = "debit_mutation" name="debit_mutation"  for="debit_mutation" type="debit_mutation" class="form-control" placeholder="{{$posts->debit_mutation}}" value="{{$posts->debit_mutation}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.Credit Mutation')
                                      @elseif($settings->lang === "id")@lang('lang.id.Credit Mutation')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Credit Mutation')
                                      @else Credit Mutation
                                      @endif
                                        <input id = "credit_mutation" name="credit_mutation"  for="credit_mutation" type="credit_mutation" class="form-control" placeholder="{{$posts->credit_mutation}}" value="{{$posts->credit_mutation}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.Ending Balance')
                                      @elseif($settings->lang === "id")@lang('lang.id.Ending Balance')
                                      @elseif($settings->lang === "jp")@lang('lang.jp.Ending Balance')
                                      @else Ending Balance
                                      @endif
                                        <input id = "ending_balance" name="ending_balance"  for="ending_balance" type="ending_balance" class="form-control" placeholder="{{$posts->ending_balance}}" value="{{$posts->ending_balance}}" >
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