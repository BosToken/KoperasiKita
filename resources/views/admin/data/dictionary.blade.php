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
          @if($settings->lang === "en")@lang('lang.en.dictionary')
                        @elseif($settings->lang === "id")@lang('lang.id.dictionary')
                        @elseif($settings->lang === "jp")@lang('lang.jp.dictionary')
                        @else Dictionary 
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
                @if($settings->lang === "en")@lang('lang.en.dictionary')
                        @elseif($settings->lang === "id")@lang('lang.id.dictionary')
                        @elseif($settings->lang === "jp")@lang('lang.jp.dictionary')
                        @else Dictionary 
                        @endif
                        </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.no')
                        @elseif($settings->lang === "id")@lang('lang.id.no')
                        @elseif($settings->lang === "jp")@lang('lang.jp.no')
                        @else No
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
                        @if($settings->lang === "en")@lang('lang.en.formula')
                        @elseif($settings->lang === "id")@lang('lang.id.formula')
                        @elseif($settings->lang === "jp")@lang('lang.jp.formula')
                        @else Formula
                        @endif
                        </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.type')
                        @elseif($settings->lang === "id")@lang('lang.id.type')
                        @elseif($settings->lang === "jp")@lang('lang.jp.type')
                        @else Type
                        @endif
                        </th>
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
                @foreach($dictionary as $dictionarys)
                @php $no++; @endphp

                <tr>
                  <td>{{$no}}</td>
                  <td>{{$dictionarys->title}}</td>
                  <td>{{$dictionarys->formula}}</td>
                  <td>{{$dictionarys->type}}</td>
                  <td>
                    <button data-toggle="modal" data-target="#edit{{$dictionarys->id}}" class="btn btn-success" role="button" title="EDIT DATA"><i class="fas fa-edit"></i></button>
                    <form action="{{url('/admin/dictionary/destroy', [$dictionarys->id])}}" method="post" onclick = "return confirm('Do You Want To Destroy This Data?')">
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                  </form>
                  </td>
                </tr>

                <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <form action="{{url('/admin/dictionary/store')}}" method="POST">
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
                                      @if($settings->lang === "en")@lang('lang.en.body')
                        @elseif($settings->lang === "id")@lang('lang.id.body')
                        @elseif($settings->lang === "jp")@lang('lang.jp.body')
                        @else Body
                        @endif
                                      
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                        </div>
                                        <textarea class="form-control" aria-label="With textarea" name="body" type="body"></textarea>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.formula')
                        @elseif($settings->lang === "id")@lang('lang.id.formula')
                        @elseif($settings->lang === "jp")@lang('lang.jp.formula')
                        @else Formula
                        @endif
                                        
                                        <input name="formula" type="formula" class="form-control" placeholder="Formula" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.type')
                        @elseif($settings->lang === "id")@lang('lang.id.type')
                        @elseif($settings->lang === "jp")@lang('lang.jp.type')
                        @else Type
                        @endif
                                        
                                        <input name="type" type="type" class="form-control" placeholder="Type" required>
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

                <div class="modal fade" id="edit{{$dictionarys->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <form action="{{url('/admin/dictionary/update', [$dictionarys->id])}}" method="POST">
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
                                  @if($settings->lang === "en")@lang('lang.en.title')
                            @elseif($settings->lang === "id")@lang('lang.id.title')
                            @elseif($settings->lang === "jp")@lang('lang.jp.title')
                            @else Title
                            @endif
                                  
                                    <input id = "title" name="title"  for="title" type="title" class="form-control" placeholder="{{$dictionarys->title}}" value="{{$dictionarys->title}}" >
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
                                        <textarea class="form-control" aria-label="With textarea" id = "body" name="body"  for="body" type="body" value="{{$dictionarys->body}}">{{$dictionarys->body}}</textarea>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.formula')
                            @elseif($settings->lang === "id")@lang('lang.id.formula')
                            @elseif($settings->lang === "jp")@lang('lang.jp.formula')
                            @else Formula
                            @endif
                                        
                                        <input id = "formula" name="formula"  for="formula" type="formula" class="form-control" placeholder="{{$dictionarys->formula}}" value="{{$dictionarys->formula}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      @if($settings->lang === "en")@lang('lang.en.type')
                            @elseif($settings->lang === "id")@lang('lang.id.type')
                            @elseif($settings->lang === "jp")@lang('lang.jp.type')
                            @else Type
                            @endif
                                        
                                        <input id = "type" name="type"  for="type" type="type" class="form-control" placeholder="{{$dictionarys->type}}" value="{{$dictionarys->type}}" >
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
