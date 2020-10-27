@extends('partials.admin.sidebar')
@section('title', 'User Setting - Koperasi Z')
@section('container')

<div class="content-wrapper">

    <section class="content-header">
      <ol class="breadcrumb">
        <li class="active">Admin - <span>User Setting</span></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xl-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="/create_event" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i>ADD</a>
          </div>
          @if(Session::get('alert_message'))
                <div class="alert alert-success">
                  <strong>{{Session::get('alert_message')}}</strong>
                </div>
            @endif
            <br>
            <div class="card shadow mb-5">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">User Setting</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Image</th>
                      <th>Username</th>
                      <th>Contact</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Join</th>
                      <th>Update At</th>
                      <th>Action</th>
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
                        <td>{{$userroles->update_at}}</td>
                        @if($userroles->role_id === "1")
                        <td>Can't Update</td>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  Username
                                                  <input id = "username" name="username"  for="username" type="username" class="form-control" placeholder="{{$userroles->username}}" value="{{$userroles->username}}" >
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  Contact
                                                  <input id = "contact" name="contact"  for="contact" type="contact" class="form-control" placeholder="{{$userroles->contact}}" value="{{$userroles->contact}}" >
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  Email
                                                  <input id = "email" name="email"  for="email" type="email" class="form-control" placeholder="{{$userroles->email}}" value="{{$userroles->email}}" >
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  Password
                                                  <input id = "password" name="password"  for="password" type="text" class="form-control" placeholder="{{$userroles->password}}" value="{{$userroles->password}}" >
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                Role
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
                                    <button type="dissmis" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-success">Save</button>
                                </div>
                                </div>
                              </div>
                          </form>
                          </div>
                          @endif

                      </tr>
                      @endforeach
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
