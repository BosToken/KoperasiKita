@foreach($setting as $settings)
@extends('partials.user.page')
@section('title', 'Journal - Koperasi Z')
@section('container')


<table class="table table-bordered table-hover ">
    <thead class="thead-light">
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
          @if($settings->lang === "en")@lang('lang.en.discharge')
          @elseif($settings->lang === "id")@lang('lang.id.discharge')
          @elseif($settings->lang === "jp")@lang('lang.jp.discharge')
          @else Discharge
          @endif
          </th>
        <th scope="col">
          @if($settings->lang === "en")@lang('lang.en.credit')
          @elseif($settings->lang === "id")@lang('lang.id.credit')
          @elseif($settings->lang === "jp")@lang('lang.jp.credit')
          @else Credit
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
        @foreach ($journal as $journals)
        @php $no++; @endphp
      <tr>
        <th scope="row">{{$no}}</th>
        <td>{{$journals->title}}</td>
        <td>{{$journals->discharge}}</td>
        <td>{{$journals->credit}}</td>
        <td><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#detail{{$journals->id}}">
          @if($settings->lang === "en")@lang('lang.en.detail')
          @elseif($settings->lang === "id")@lang('lang.id.detail')
          @elseif($settings->lang === "jp")@lang('lang.jp.detail')
          @else Detail
          @endif
          </button></td>
      </tr>

      <div class="modal fade" id="detail{{$journals->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        
                        <input name="title" type="text" class="form-control" placeholder="{{$journals->title}}" disabled>
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
                        
                        <textarea class="form-control" rows="5" id="comment" disabled>{{$journals->body}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                      @if($settings->lang === "en")@lang('lang.en.discharge')
          @elseif($settings->lang === "id")@lang('lang.id.discharge')
          @elseif($settings->lang === "jp")@lang('lang.jp.discharge')
          @else Discharge
          @endif
                        
                        <input name="discharge" type="text" class="form-control" placeholder="{{$journals->discharge}}" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                      @if($settings->lang === "en")@lang('lang.en.credit')
          @elseif($settings->lang === "id")@lang('lang.id.credit')
          @elseif($settings->lang === "jp")@lang('lang.jp.credit')
          @else Credit
          @endif
                        
                        <input name="credit" type="text" class="form-control" placeholder="{{$journals->credit}}" disabled>
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
      @endforeach

    </tbody>
  </table>
</div>
</div>
</form>

@stop
@endforeach