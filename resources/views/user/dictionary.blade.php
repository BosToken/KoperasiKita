@extends('partials.user.page')
@section('title', 'Dictionary - Koperasi Z')
@section('container')


<table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Title</th>
        <th scope="col">Formula</th>
        <th scope="col">Type</th>
        <th scope="col">Action</th>
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
        <td><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#detail{{$dictionary->id}}">Detail</button></td>
      </tr>
      
  <div class="modal fade" id="detail{{$dictionary->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title w-80 dark-grey-text my-3" id="myModalLabel"><strong>Detail</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        Title
                        <input name="title" type="text" class="form-control" placeholder="{{$dictionary->title}}" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        Body
                        <textarea class="form-control" rows="5" id="comment" disabled>{{$dictionary->body}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        Formula
                        <input name="formula" type="text" class="form-control" placeholder="{{$dictionary->formula}}" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        Type
                        <input name="type" type="text" class="form-control" placeholder="{{$dictionary->type}}" disabled>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer mx-5 pt-3 mb-1">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
      </div>
    </div>
  </div>
      @endforeach

    </tbody>
  </table>

@stop