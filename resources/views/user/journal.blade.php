<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


@extends('partials.user.page')
@section('title', 'Journal - Koperasi Z')
@section('container')


<table class="table " style="width: 1300px; height: 640px;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Discharge</th>
        <th scope="col">Body</th>
        <th scope="col">Credit</th>
      </tr>
    </thead>
    
    <tbody>
        @foreach ($journal as $journals)
      <tr>
        <th scope="row">#</th>
        <td>{{$journals->title}}</td>
        <td>{{$journals->discharge}}</td>
        <td>{{$journals->credit}}</td>
        <td><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#detail{{$journals->id}}">Detail</button></td>
      </tr>

      <div class="modal fade" id="detail{{$journals->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="#" method="POST">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                            Title
                              <input name="title" type="text" class="form-control" placeholder="{{$journals->title}}" required>
                          </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="comment">Body</label>
                    <textarea class="form-control" rows="5" id="comment">{{$journals->body}}</textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            Discharge
                            <input name="formula" type="text" class="form-control" placeholder="{{$journals->discharge}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                Credit
                                <input name="type" type="text" class="form-control" placeholder="{{$journals->credit}}" required>
                            </div>
                        </div>
                </div>
              </div>
              <div class="modal-footer mx-5 pt-3 mb-1">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
          </div>
      </form>
      </div>
      @endforeach

    </tbody>
  </table>
</div>
</div>
</form>

@stop