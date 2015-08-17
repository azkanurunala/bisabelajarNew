<div id="form"  class="modal fade" role="dialog">
      <div class="top-padding modal-dialog text-center">

        <!-- Modal content-->
        <div class="modal-content ">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class=" bold font-green ">Bergabung bersama BisaBelajar</h3>
          </div>
          <div class="modal-body">
            <div class="row padding-medium"> 
               

            <form id="apply" enctype="multipart/form-data" action="http://career.bisabelajar.com/submit.php" method="post" >
               <div class="row">
                    <h4 class="text-center bold font-green">
                    Posisi
                    </h4>
                    <div class="row  bottom-border">
                    <label class="medium-text col-sm-12 col-md-3"><input id="animator2" type="radio" value="Animator" name="posisi" required > <yellow>Animator </yellow></label>
                    <label class="medium-text col-sm-12 col-md-6" ><input id="strategist2" type="radio" value="Content Strategist" name="posisi" required><yellow> Content Strategist </yellow></label>
                    <label class="medium-text col-sm-12 col-md-3"><input id="teacher2" type="radio" value="Teacher" name="posisi" required > <yellow>Teacher</yellow> </label>
                    </div>
                  </div>
               <div class="col-sm-12 col-md-6 ">
                  

                  <div class="row">
                    <h4 class="text-left bold font-green">
                    Nama
                    </h4>
                    <input placeholder="Co: Azka Nurun Ala" name="nama" class="input-font-size rounded yellow-outlined form-control" required>
                  </div>
                  
                  <div class="row">
                    <h4 class="text-left bold font-green">
                    Email
                    </h4>
                    <input  placeholder="Co: azka@bisabelajar.com" name="email" class="input-font-size rounded yellow-outlined form-control" required>
                  </div>

                  <div class="row">
                    <h4 class="text-left bold font-green">
                    No. HP
                    </h4>
                    <input  type="number" placeholder="Co: +628578xxxx " name="nohp" class="input-font-size rounded yellow-outlined form-control" required>
                  </div>

                  <div class="row">
                    <h4 class="text-left bold font-green">
                    Link Portofolio
                    </h4>
                    <input  placeholder="Co:http://behance.net/azkanurunala (opsional)" name="portofolio" class="input-font-size rounded yellow-outlined form-control">
                  </div>
               </div>
               <div class="col-sm-12 col-md-6 left-padding">
              
                  <div class="row">
                    <h4 class="text-left bold font-green">
                    Alamat
                    </h4>
                    <textarea placeholder="Co: Jl.Raya Kukusan, Depok Jawa Barat " name="alamat" class="input-font-size rounded yellow-outlined form-control" required></textarea>
                  </div>
                  


                  <div class="row">
                    <h4 class="text-left bold font-green">
                    Unggah CV
                    </h4>
                    Pilih file untuk diunggah:
                    <input type="file" name="fileToUpload" id="fileToUpload" class="input-font-size rounded yellow-outlined form-control" required>
                    <!-- <input placeholder="format:pdf" name="cv" class="input-font-size rounded yellow-outlined form-control" required> -->
                  </div>

                  <div class="row top-padding-narrow text-right">
                  <input type="submit" value="Kirim"  form="apply" class="margin-small padding-small yellow-bg btn btn-primary btn-xl ">
                  </div>
               </div>
            </form>



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