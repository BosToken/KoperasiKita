<!-- Modal -->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>SIGN UP</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <form action="{{url('/register')}}" method="POST">
        {{ csrf_field() }}
      <div class="modal-body mx-4">
        <!--Body-->
        <div class="md-form mb-5">
          <input type="email" id="Form-email1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Email Anda</label>
        </div>
        <div class="md-form pb-3">
          <input type="password" id="Form-pass1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-pass1">Password Anda</label>
        </div>

        <div class="text-center mb-3">
          <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">SIGN UP</button>
        </div>
      <!--Footer-->
      <div class="modal-footer mx-5 pt-3 mb-1">
        <p class="font-small grey-text d-flex justify-content-end">Sudah Punya Akun?<a href="#modalLoginForm" class="blue-text ml-1">
            LOGIN</a></p>
      </div>
    </div>
</form>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->