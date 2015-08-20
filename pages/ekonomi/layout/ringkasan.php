        <div id="ringkasan" class="tab-pane ">
        <?php include ('tabSwitch.php'); ?>
            <div class="">
                <div class="bottom-radius top-padding-narrow latihan row left-padding right-padding  grey-bg ">
                    <h4 class="text-left bold">Ringkasan Materi</h4>
                    <p  class="font-green text-justify ">
                    <?php include ('soal-1.txt'); ?>
                    </p>

                    <h4 class="text-left bold">Teori Kunci</h4>
                    <p  class="font-green text-justify ">
                    <?php include ('soal-2.txt'); ?>
                    </p>

                    <h4 class="text-left bold">Rumus Penting</h4>
                    <p  class="font-green text-justify ">
                    <?php include ('soal-3.txt'); ?>
                    </p>
                    <h4 class="text-left bold">Penerapan Teori</h4>
                    <p  class="font-green text-justify ">
                    <?php include ('soal-4.txt'); ?>
                    </p>
                </div>
            </div>
            <?php include ('pages/ekonomi/layout/socmed-3.php') ?>
            <div class="row top-green-border bottom-green-border ">
                <div class="col-sm-12 col-md-3 text-left">
                    <a href="#"  class="yellow-outlined yellow-outlined-hover padding-all-narrow btn btn-primary btn-xl ">
                    <i class="social-icon-2 fa fa-chevron-left"></i>SEBELUMNYA</a>
                </div>
                 <div class="col-sm-12 col-md-6 text-center">
                    <a href="#"  class="red-bg padding-all-narrow btn btn-primary btn-xl ">
                    UNDUH RINGKASAN<i class="social-icon-2 fa fa-download"></i></a>
                </div>
                 <div class="col-sm-12 col-md-3 text-right">
                    <a href="#2" data-toggle="tab"  class="yellow-outlined yellow-outlined-hover  padding-all-narrow btn btn-primary btn-xl ">
                    SELANJUTNYA<i class="social-icon-2 fa fa-chevron-right"></i></a>
                </div>
            </div>
            <?php include ('pages/ekonomi/layout/comment.php') ?>

        </div>