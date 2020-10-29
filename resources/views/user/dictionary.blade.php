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
        <th scope="col">
          @if($settings->lang === "en")@lang('lang.en.no')
          @elseif($settings->lang === "id")@lang('lang.id.no')
          @elseif($settings->lang === "jp")@lang('lang.jp.no')
          @else No
          @endif
          </th>
        <th scope="col">
          @if($settings->lang === "en")@lang('lang.en.title')
          @elseif($settings->lang === "id")@lang('lang.id.title')
          @elseif($settings->lang === "jp")@lang('lang.jp.title')
          @else Title
          @endif
          </th>
        <th scope="col">
          @if($settings->lang === "en")@lang('lang.en.formula')
          @elseif($settings->lang === "id")@lang('lang.id.formula')
          @elseif($settings->lang === "jp")@lang('lang.jp.formula')
          @else Formula
          @endif
          </th>
        <th scope="col">
          @if($settings->lang === "en")@lang('lang.en.type')
          @elseif($settings->lang === "id")@lang('lang.id.type')
          @elseif($settings->lang === "jp")@lang('lang.jp.type')
          @else Type
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
                @foreach($dictionary as $dictionary)
                @php $no++; @endphp
      <tr>
        <th scope="row">{{$no}}</th>
        <td>{{$dictionary->title}}</td>
        <td>{{$dictionary->formula}}</td>
        <td>{{$dictionary->type}}</td>
        <td><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#detail{{$dictionary->id}}">
          @if($settings->lang === "en")@lang('lang.en.detail')
          @elseif($settings->lang === "id")@lang('lang.id.detail')
          @elseif($settings->lang === "jp")@lang('lang.jp.detail')
          @else Detail
          @endif</button></td>
      </tr>
      
  <div class="modal fade" id="detail{{$dictionary->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      @if($settings->lang === "en")@lang('lang.en.title')
                      @elseif($settings->lang === "id")@lang('lang.id.title')
                      @elseif($settings->lang === "jp")@lang('lang.jp.title')
                      @else Title
                      @endif
                        <input name="title" type="text" class="form-control" placeholder="{{$dictionary->title}}" disabled>
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
                        <textarea class="form-control" rows="5" id="comment" disabled>{{$dictionary->body}}</textarea>
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
                        
                        <input name="formula" type="text" class="form-control" placeholder="{{$dictionary->formula}}" disabled>
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
                        <input name="type" type="text" class="form-control" placeholder="{{$dictionary->type}}" disabled>
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
    <form action="{{url('/user/dictionary/store')}}" method="POST">
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
      @endforeach

    </tbody>
  </table>

@stop
@endforeach