@extends('partials.user.page')
@section('title', 'Journal - Koperasi Z')
@section('container')


<table class="table table-bordered table-hover " style="width: 1300px; height: 640px;">
    <thead class="thead-light">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Title</th>
        <th scope="col">Discharge</th>
        <th scope="col">Body</th>
        <th scope="col">Credit</th>
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
        <td><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#detail{{$journals->id}}">Detail</button></td>
      </tr>

      <div class="modal fade" id="detail{{$journals->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <input name="title" type="text" class="form-control" placeholder="{{$journals->title}}" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        Body
                        <textarea class="form-control" rows="5" id="comment" disabled>{{$journals->body}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        Discharge
                        <input name="discharge" type="text" class="form-control" placeholder="{{$journals->discharge}}" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        Credit
                        <input name="credit" type="text" class="form-control" placeholder="{{$journals->credit}}" disabled>
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
</div>
</div>
</form>

@stop