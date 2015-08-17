

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php#page-top"><img src="img/logo_typo.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-responsive-collapse navbar-collapse" id="bs-navbar">
                
                <ul class="nav navbar-nav navbar-left">
                    <li >
                        <a class="page-scroll" href="kelas.php">Kelas</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="tryout.php">Tryout</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="info.php">Info</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="about.php">Tentang</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="hubungi.php">Hubungi Kami</a>
                    </li>
                   <li>
                        <a class="page-scroll" href="career">Karir</a>
                    </li>
                </ul>



                <ul class="bg-green nav navbar-nav navbar-right">
                    <li>
                        <a id="masuk" class="margin-all-narrow login yellow-bg btn btn-primary btn-xl " data-toggle="modal" data-target="#login" href="#">Login</a>
                    </li>
                    <li>
                        <a id="daftar" class="margin-all-narrow register btn btn-primary btn-xl " data-toggle="modal" data-target="#register" href="#">Daftar</a>
                    </li>
                    <li id="profil-text" class="no-right-margin">
                        <a class="no-right-padding page-scroll" href="profil.php">Profil</a>
                    </li>
                    <li id="profil-img" class="no-left-margin">
                        <a class="tiny-left-padding page-scroll " href="profil.php"><img class="navbar-brand no-margin no-padding image-circle-small2" src="img/contributor/002/img.jpg" ></a>
                    </li>
                  
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <div class="short-input transparent-form ">
                             <input type="text" class="transparent"  placeholder="Cari Kelas...">
                             <a class="search-button" href="#" ><i class="fa fa-search"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <?php include ('layout/login.php'); ?>
    <?php include ('layout/register.php'); ?>
   