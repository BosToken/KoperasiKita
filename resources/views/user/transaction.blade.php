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
            <th scope="col">@if($settings->lang === "en")@lang('lang.en.Number Evidence')
            @elseif($settings->lang === "id")@lang('lang.id.Number Evidence')
            @elseif($settings->lang === "jp")@lang('lang.jp.Number Evidence')
            @else Number Evidence
            @endif</th>
            <th scope="col">
            @if($settings->lang === "en")@lang('lang.en.Type Transaction')
            @elseif($settings->lang === "id")@lang('lang.id.Type Transaction')
            @elseif($settings->lang === "jp")@lang('lang.jp.Type Transaction')
            @else Type Transaction
            @endif
            </th>
            <th scope="col">
            @if($settings->lang === "en")@lang('lang.en.ID Dictionary')
            @elseif($settings->lang === "id")@lang('lang.id.ID Dictionary')
            @elseif($settings->lang === "jp")@lang('lang.jp.ID Dictionary')
            @else ID Dictionary
            @endif
            </th>
            <th scope="col">
            @if($settings->lang === "en")@lang('lang.en.Amount')
            @elseif($settings->lang === "id")@lang('lang.id.Amount')
            @elseif($settings->lang === "jp")@lang('lang.jp.Amount')
            @else Amount
            @endif
            </th>
            <th scope="col">
            @if($settings->lang === "en")@lang('lang.en.Operator')
            @elseif($settings->lang === "id")@lang('lang.id.Operator')
            @elseif($settings->lang === "jp")@lang('lang.jp.Operator')
            @else Operator
            @endif
            </th>
            <th scope="col">
            @if($settings->lang === "en")@lang('lang.en.Status')
            @elseif($settings->lang === "id")@lang('lang.id.Status')
            @elseif($settings->lang === "jp")@lang('lang.jp.Status')
            @else Status
            @endif
            </th>
            <th scope="col">
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
                @foreach($transaction as $transactions)
                @php $no++; @endphp
      <tr>
        <th scope="row">{{$no}}</th>
        <td>{{$transactions->num_evidence}}</td>
        <td>{{$transactions->type_transaction}}</td>
        <td>{{$transactions->dictionary_id}}</td>
        <td>{{$transactions->amount}}</td>
        <td>{{$transactions->operator}}</td>
        <td>{{$transactions->status}}</td>
        <td><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#detail{{$transactions->id}}">
          @if($settings->lang === "en")@lang('lang.en.detail')
          @elseif($settings->lang === "id")@lang('lang.id.detail')
          @elseif($settings->lang === "jp")@lang('lang.jp.detail')
          @else Detail
          @endif</button></td>
      </tr>
      
  <div class="modal fade" id="detail{{$transactions->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        @if($settings->lang === "en")@lang('lang.en.Number Evidence')
            @elseif($settings->lang === "id")@lang('lang.id.Number Evidence')
            @elseif($settings->lang === "jp")@lang('lang.jp.Number Evidence')
            @else Number Evidence
            @endif
                        <input name="title" type="text" class="form-control" placeholder="{{$transactions->num_evidence}}" disabled>
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
                        <input name="title" type="text" class="form-control" placeholder="{{$transactions->type_transaction}}" disabled>
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
                        <input name="title" type="text" class="form-control" placeholder="{{$transactions->dictionary_id}}" disabled>
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
                        <textarea class="form-control" rows="5" id="comment" disabled>{{$transactions->body}}</textarea>
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
                        <input name="title" type="text" class="form-control" placeholder="{{$transactions->amount}}" disabled>
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
                        <input name="title" type="text" class="form-control" placeholder="{{$transactions->operator}}" disabled>
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
                        <input name="title" type="text" class="form-control" placeholder="{{$transactions->status}}" disabled>
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
    <form action="{{url('/user/transaction/store')}}" method="POST">
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
      @endforeach

    </tbody>
  </table>

@stop
@endforeach