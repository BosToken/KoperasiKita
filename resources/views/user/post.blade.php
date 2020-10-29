@foreach($setting as $settings)
@extends('partials.user.page')
@section('title', 'Dictionary - Koperasi Z')
@section('container')


<button data-toggle="modal" data-target="#add" class="btn btn-primary" role="button" title="Tambah Data" style="width: 150px;">
  @if($settings->lang === "en")@lang('lang.en.add')
      @elseif($settings->lang === "id")@lang('lang.id.add')
      @elseif($settings->lang === "jp")@lang('lang.jp.add')
      @else Add
      @endif
      </button>

      <table class="table table-bordered table-hover ">
    <thead class="thead-dark">
      <tr> 
        <th scope="col">@if($settings->lang === "en")@lang('lang.en.no')
                @elseif($settings->lang === "id")@lang('lang.id.no')
                @elseif($settings->lang === "jp")@lang('lang.jp.no')
                @else No
                @endif</th>
                <th scope="col">
                @if($settings->lang === "en")@lang('lang.en.Preiod')
                @elseif($settings->lang === "id")@lang('lang.id.Preiod')
                @elseif($settings->lang === "jp")@lang('lang.jp.Preiod')
                @else Preiod
                @endif
                </th>
                <th scope="col">
                @if($settings->lang === "en")@lang('lang.en.Beginning Balance')
                @elseif($settings->lang === "id")@lang('lang.id.Beginning Balance')
                @elseif($settings->lang === "jp")@lang('lang.jp.Beginning Balance')
                @else Beginning Balance
                @endif
                </th>
                <th scope="col">
                @if($settings->lang === "en")@lang('lang.en.Debit Mutation')
                @elseif($settings->lang === "id")@lang('lang.id.Debit Mutation')
                @elseif($settings->lang === "jp")@lang('lang.jp.Debit Mutation')
                @else Debit Mutation
                @endif
                </th>
                <th scope="col">
                @if($settings->lang === "en")@lang('lang.en.Credit Mutation')
                @elseif($settings->lang === "id")@lang('lang.id.Credit Mutation')
                @elseif($settings->lang === "jp")@lang('lang.jp.Credit Mutation')
                @else Credit Mutation
                @endif
                </th>
                <th scope="col">
                @if($settings->lang === "en")@lang('lang.en.Ending Balance')
                @elseif($settings->lang === "id")@lang('lang.id.Ending Balance')
                @elseif($settings->lang === "jp")@lang('lang.jp.Ending Balance')
                @else Ending Balance
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
                @foreach($post as $posts)
                @php $no++; @endphp
      <tr>
        <th scope="row">{{$no}}</th>
        <td>{{$posts->period}}</td>
        <td>{{$posts->beginning_balance}}</td>
        <td>{{$posts->debit_mutation}}</td>
        <td>{{$posts->credit_mutation}}</td>
        <td>{{$posts->ending_balance}}</td>
        <td><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#detail{{$posts->id}}">
          @if($settings->lang === "en")@lang('lang.en.detail')
          @elseif($settings->lang === "id")@lang('lang.id.detail')
          @elseif($settings->lang === "jp")@lang('lang.jp.detail')
          @else Detail
          @endif</button></td>
      </tr>
      
  <div class="modal fade" id="detail{{$posts->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title w-80 dark-grey-text my-3" id="myModalLabel"><strong>
          @if($settings->lang === "en")@lang('lang.en.detail')
          @elseif($settings->lang === "id")@lang('lang.id.detail')
          @elseif($settings->lang === "jp")@lang('lang.jp.detail')
          @else Detail
          @endif
          </strong></h3>
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
                        <input name="title" type="text" class="form-control" placeholder="{{$posts->period}}" disabled>
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
                        <input name="title" type="text" class="form-control" placeholder="{{$posts->beginning_balance}}" disabled>
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
                        <input name="title" type="text" class="form-control" placeholder="{{$posts->debit_mutation}}" disabled>
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
                        <input name="title" type="text" class="form-control" placeholder="{{$posts->credit_mutation}}" disabled>
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
                        <input name="title" type="text" class="form-control" placeholder="{{$posts->ending_balance}}" disabled>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer mx-5 pt-3 mb-1">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">
                @if($settings->lang === "en")@lang('lang.en.close')
                      @elseif($settings->lang === "id")@lang('lang.id.close')
                      @elseif($settings->lang === "jp")@lang('lang.jp.close')
                      @else Close
                      @endif
                      </button>
            </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{url('/user/post/store')}}" method="POST">
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
      @endforeach

    </tbody>
  </table>

@stop
@endforeach