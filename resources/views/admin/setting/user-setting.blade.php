@foreach($setting as $settings)
@extends('partials.admin.sidebar')
@section('title', 'User Setting - Koperasi Z')
@section('container')

<div class="content-wrapper">

    <section class="content-header">
      <ol class="breadcrumb">
        <li class="active"><span>
          @if($settings->lang === "en")@lang('lang.en.usersetting')
                @elseif($settings->lang === "id")@lang('lang.id.usersetting')
                @elseif($settings->lang === "jp")@lang('lang.jp.usersetting')
                @else User Setting
                @endif
                </span></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xl-12">
      <div class="box box-primary">
        <div class="box-header">
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
                @if($settings->lang === "en")@lang('lang.en.usersetting')
                @elseif($settings->lang === "id")@lang('lang.id.usersetting')
                @elseif($settings->lang === "jp")@lang('lang.jp.usersetting')
                @else User Setting
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
                        @if($settings->lang === "en")@lang('lang.en.image')
                @elseif($settings->lang === "id")@lang('lang.id.image')
                @elseif($settings->lang === "jp")@lang('lang.jp.image')
                @else Image
                @endif 
              </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.username')
                @elseif($settings->lang === "id")@lang('lang.id.username')
                @elseif($settings->lang === "jp")@lang('lang.jp.username')
                @else Username
                @endif 
                </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.contact')
                @elseif($settings->lang === "id")@lang('lang.id.contact')
                @elseif($settings->lang === "jp")@lang('lang.jp.contact')
                @else Contact
                @endif
                </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.email')
                @elseif($settings->lang === "id")@lang('lang.id.email')
                @elseif($settings->lang === "jp")@lang('lang.jp.email')
                @else Email
                @endif
                </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.role')
                @elseif($settings->lang === "id")@lang('lang.id.role')
                @elseif($settings->lang === "jp")@lang('lang.jp.role')
                @else Role
                @endif
                </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.joinedat')
                @elseif($settings->lang === "id")@lang('lang.id.joinedat')
                @elseif($settings->lang === "jp")@lang('lang.jp.joinedat')
                @else Joined At
                @endif
                </th>
                      <th>
                        @if($settings->lang === "en")@lang('lang.en.updatedat')
                @elseif($settings->lang === "id")@lang('lang.id.updatedat')
                @elseif($settings->lang === "jp")@lang('lang.jp.updatedat')
                @else Updated At
                @endif
                </th>
                      <th>
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
                @foreach($userrole as $userroles)
                @php $no++; @endphp

                <tr>
                  <td>{{$no}}</td>
                  <td><img src="{{$userroles->img_url}}" class="img logo rounded-circle mb-5" width="200" height="200" alt=""></td>
                  <td>{{$userroles->username}}</td>
                  <td>{{$userroles->contact}}</td>
                  <td>{{$userroles->email}}</td>
                  <td>
                            @if($userroles->role_id === "1")
                            Admin
                            @elseif($userroles->role_id === "2")
                            User
                            @else Not Have role
                            @endif
                        </td>
                        <td>{{$userroles->created_at}}</td>
                        <td>{{$userroles->updated_at}}</td>
                        @if($userroles->role_id === "1")
                        <td>
                          @if($settings->lang === "en")@lang('lang.en.cant')
                @elseif($settings->lang === "id")@lang('lang.id.cant')
                @elseif($settings->lang === "jp")@lang('lang.jp.cant')
                @else Can't Update
                @endif
                </td>
                        @else
                        <td><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#edit{{$userroles->id}}"><i class="fas fa-edit"></i></button> <hr>
                        <form action="{{url('/admin/user/setting/destroy-account', [$userroles->id])}}" method="post" onclick = "return confirm('Do You Want To Destroy This Account?')">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                        
                        </td>
                        

                        <div class="modal fade" id="edit{{$userroles->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <form action="{{url('/admin/user/setting/update', [$userroles->id])}}" method="POST">
                                {{ csrf_field() }}
                                @method('PUT')
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                      @if($settings->lang === "en")@lang('lang.en.edituser')
                @elseif($settings->lang === "id")@lang('lang.id.edituser')
                @elseif($settings->lang === "jp")@lang('lang.jp.edituser')
                @else Edit User
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
                                                @if($settings->lang === "en")@lang('lang.en.username')
                @elseif($settings->lang === "id")@lang('lang.id.username')
                @elseif($settings->lang === "jp")@lang('lang.jp.username')
                @else Username
                @endif
                                                  <input id = "username" name="username"  for="username" type="username" class="form-control" placeholder="{{$userroles->username}}" value="{{$userroles->username}}" >
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                @if($settings->lang === "en")@lang('lang.en.contact')
                @elseif($settings->lang === "id")@lang('lang.id.contact')
                @elseif($settings->lang === "jp")@lang('lang.jp.contact')
                @else Contact
                @endif
                                                  
                                                  <input id = "contact" name="contact"  for="contact" type="contact" class="form-control" placeholder="{{$userroles->contact}}" value="{{$userroles->contact}}" >
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                @if($settings->lang === "en")@lang('lang.en.email')
                @elseif($settings->lang === "id")@lang('lang.id.email')
                @elseif($settings->lang === "jp")@lang('lang.jp.email')
                @else Email
                @endif
                                                  <input id = "email" name="email"  for="email" type="email" class="form-control" placeholder="{{$userroles->email}}" value="{{$userroles->email}}" >
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                @if($settings->lang === "en")@lang('lang.en.password')
                @elseif($settings->lang === "id")@lang('lang.id.password')
                @elseif($settings->lang === "jp")@lang('lang.jp.password')
                @else Password
                @endif
                                                  
                                                  <input id = "password" name="password"  for="password" type="text" class="form-control" placeholder="{{$userroles->password}}" value="{{$userroles->password}}" >
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                              @if($settings->lang === "en")@lang('lang.en.role')
                @elseif($settings->lang === "id")@lang('lang.id.role')
                @elseif($settings->lang === "jp")@lang('lang.jp.role')
                @else Role
                @endif
                                                
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <select class="custom-select" id = "role_id" name="role_id"  for="role_id">
                                                      <option selected value="{{$userroles->role_id}}">
                                                        @if($userroles->role_id === "1")Admin
                                                        @elseif($userroles->role_id === "2")User
                                                        @else Not Have role
                                                        @endif
                                                    </option>
                                                      <option value="1">Admin</option>
                                                      <option value="2">User</option>
                                                    </select>
                                                  </div>
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
                          @endif
                          @endforeach
                      </tr>
                    </tbody>
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