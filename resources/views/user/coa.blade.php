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
        @if($settings->lang === "en")@lang('lang.en.numap')
@elseif($settings->lang === "id")@lang('lang.id.numap')
@elseif($settings->lang === "jp")@lang('lang.jp.numap')
@else Number Approximate
@endif
</th>
<th scope="col">
    @if($settings->lang === "en")@lang('lang.en.parent')
@elseif($settings->lang === "id")@lang('lang.id.parent')
@elseif($settings->lang === "jp")@lang('lang.jp.parent')
@else Parent ID
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
            @if($settings->lang === "en")@lang('lang.en.code')
    @elseif($settings->lang === "id")@lang('lang.id.code')
    @elseif($settings->lang === "jp")@lang('lang.jp.code')
    @else Code
    @endif
    </th>
    <th text-align="center">Headdet</th>
    <th text-align="center">DK</th>
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
        <th scope="row">{{$no}}</th>
        <td>{{$coas->parent_id}}</td>
        <td>{{$coas->num_approximate}}</td>
        <td>{{$coas->title}}</td>
        <td>{{$coas->code}}</td>
        <td>{{$coas->headdet}}</td>
        <td>{{$coas->dk}}</td>
        <td><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#detail{{$coas->id}}">
          @if($settings->lang === "en")@lang('lang.en.detail')
          @elseif($settings->lang === "id")@lang('lang.id.detail')
          @elseif($settings->lang === "jp")@lang('lang.jp.detail')
          @else Detail
          @endif</button></td>
      </tr>
      
  <div class="modal fade" id="detail{{$coas->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      @if($settings->lang === "en")@lang('lang.en.numap')
                      @elseif($settings->lang === "id")@lang('lang.id.numap')
                      @elseif($settings->lang === "jp")@lang('lang.jp.numap')
                      @else Number Approximate
                      @endif
                        <input name="num_approximate" type="text" class="form-control" placeholder="{{$coas->num_approximate}}" disabled>
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
                        <input name="title" type="text" class="form-control" placeholder="{{$coas->parent_id}}" disabled>
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
                        <input name="title" type="text" class="form-control" placeholder="{{$coas->title}}" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                      @if($settings->lang === "en")@lang('lang.en.code')
                      @elseif($settings->lang === "id")@lang('lang.id.code')
                      @elseif($settings->lang === "jp")@lang('lang.jp.code')
                      @else code
                      @endif
                        <input name="title" type="text" class="form-control" placeholder="{{$coas->code}}" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">Headder
                        <input name="headdet" type="text" class="form-control" placeholder="{{$coas->headdet}}" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">DK
                        <input name="dk" type="text" class="form-control" placeholder="{{$coas->dk}}" disabled>
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
    <form action="{{url('/user/coa/store')}}" method="POST">
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
                    <div class="form-group">Headdet
                      <input name="headdet" type="headdet" class="form-control" placeholder="Headdet" required>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">DK
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
      @endforeach

    </tbody>
  </table>

@stop
@endforeach