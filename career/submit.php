<!-- <!DOCTYPE html> -->
<html lang="en">
<?php include ('layout/head.php') ?>
<body class="no-padding" id="home">
<?php
	
	include('core/init.inc.php');

	// header('Content-Type: text/plain');

	// print_r(read_csv('tes.csv'));
	$data = read_csv('candidate.csv');
	$posisi = $_POST["posisi"];
	$nama = $_POST["nama"];

	$email = $_POST["email"];
	
	$nohp = $_POST["nohp"];

	$alamat = $_POST["alamat"];

	$porto = $_POST["portofolio"];

	//$fileToUpload = $_POST["fileToUpload"];

	// if(empty($posisi) || empty($nama) || empty($email) || empty($nohp) || empty($alamat) || empty($fileToUpload))
	// {
	// 	echo "<script type='text/javascript'>alert('data belum terisi semua!')</script>";
	// 	die();
	// }
	//echo $nama;

	$target_dir = "candidates/";
	$target_file = $target_dir . $nama .'_'. basename($_FILES["fileToUpload"]["name"]);
	
	$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if(isset($_POST["submit"])) {
	    //$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    //if($check !== false) {
	        //echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    // } else {
	    //     echo "File is not an image.";
	    //     $uploadOk = 0;
	    // }
	}

	if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "<header class='padding-large' >";
    echo "<h4>Sorry, file is to large</h4>";
	echo "<a href='http://career.bisabelajar.com' class='margin-small padding-small yellow-bg btn btn-primary btn-xl'> Kembali </a> ";
	echo "</header>";
    $uploadOk = 0;
    die();
	}

	// Allow certain file formats
	if($fileType != "doc" && $fileType != "docx" && $fileType != "pdf"
	 ) {
		echo "<header class='padding-large' >";
	    echo "<h4>Sorry, only pdf, doc, and docx are allowed.</h4>";
	    echo "<a href='http://career.bisabelajar.com' class='margin-small padding-small yellow-bg btn btn-primary btn-xl'> Kembali </a> ";
	    echo "</header>";
	    $uploadOk = 0;
	    die();
	}

	else{
		if (file_exists($target_file)) {
		echo "<header class='padding-large' >";
	    echo "<h4>Sorry, file already exists.</h4>";
	    echo "<a href='http://career.bisabelajar.com' class='margin-small padding-small yellow-bg btn btn-primary btn-xl'> Kembali </a> ";
	    echo "</header>";
	    $uploadOk = 0;
	    die();
		}
		else{
		$uploadOk = 1;
		}
	}

	if ($uploadOk == 0) {
		echo "<header class='padding-large' >";
	    echo "<h4>Sorry, your file was not uploaded.</h4>";
	    echo "<a href='http://career.bisabelajar.com' class='margin-small padding-small yellow-bg btn btn-primary btn-xl'> Kembali </a> ";
	    echo "</header>";
    	
    	die();
	// if everything is ok, try to upload file
	} 
	else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<header class='padding-large' >";
	    echo "<h4>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. Your data sent successfully!</h4>";
	    echo "<a href='http://career.bisabelajar.com' class='margin-small padding-small yellow-bg btn btn-primary btn-xl'> Kembali </a> ";
	    echo "</header>";
    	
    	// die();
    } else {
    	echo "<header class='padding-large' >";
	    echo "<h4>Sorry, there was an error uploading your file.</h4>";
	    echo "<a href='http://career.bisabelajar.com' class='margin-small padding-small yellow-bg btn btn-primary btn-xl'> Kembali </a> ";
	    echo "</header>";
        die();
    }
}
	// Check if image file is a actual image or fake image


	$data[] = array($posisi,$nama,$email,$nohp,$alamat,$porto );

	write_csv('candidate.csv', $data);
	//header("Location: http://career.bisabelajar.com/index.php");
	//echo "<script type='text/javascript'>alert('data terkirim dengan sukses!')</script>";
  

?>

<?php include('layout/foot.php') ?>

</body>
</html>