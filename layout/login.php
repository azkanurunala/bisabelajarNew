<div id="login" class="modal fade" role="dialog">
      <div class="top-padding modal-dialog text-center">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title bold font-green ">Login ke Akun Kamu</h4>
          </div>
          <div class="modal-body">
            <div class="row padding-medium"> 
               


               <div class="col-sm-12 col-md-6 ">
                  <div class="row">
                    <h4 class="label-login bold font-green">
                    Username
                    </h4>
                    <input class="input-font-size rounded yellow-outlined form-control">
                  </div>
                  
                  <div class="row">
                    <h4 class="label-login bold font-green">
                    Password
                    </h4>
                    <input type="password" class="input-font-size rounded yellow-outlined form-control">
                  </div>

                  <div class="row">
                  <a id="login_btn" onclick="loggedIn()" href="#" data-dismiss="modal" class="margin-small padding-small yellow-bg btn btn-primary btn-xl ">Login</a>
                  </div>

               </div>

               <div class=" col-sm-12 col-md-6 ">
                  
                  <div class="row">
                    <h4 class="label-login font-green">
                    atau login dengan
                    </h4>
                  </div>
                  <div class="row">
                  <a href="#" data-dismiss="modal"  class="socmed-login-btn fb-bg padding-small yellow-bg btn btn-primary btn-xl "><i class="fa fa-facebook social-icon"></i>Facebook Login</a>
                  </div>
                  <div class="row">
                  <a href="#" data-dismiss="modal"  class="socmed-login-btn twitter-bg margin-small padding-small yellow-bg btn btn-primary btn-xl "><i class=" fa fa-twitter social-icon"></i>Twitter Login</a>
                  </div>
                  <div class="row">
                    <h4 class="label-login font-green">
                    Belum punya akun? 
                    </h4>
                    <a class="link-register" data-dismiss="modal" data-toggle="modal" data-target="#register" href="#"><h4>Daftar</h4></a>
                  </div>

               </div>
                <!--div class="padding-right-narrow text-right col-sm-12 col-md-6 ">
                    <a class="button-gap crud" data-dismiss="modal" href="#">
                    <span class="glyphicon glyphicon-remove"  aria-hidden="true"></span> CANCEL</a>
                </div>
                 <div id = "btnDelete" class="padding-leftt-narrow text-left col-sm-12 col-md-6">
                    <a id="linkDeleteButtonModal" class="delete-button-gap crud"  href="">
                    DELETE <span class="glyphicon glyphicon-ok"  aria-hidden="true"></span></a>
                </div-->
            </div>
          </div>
        </div>

      </div>
</div>