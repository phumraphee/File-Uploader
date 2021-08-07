<?php
	$fileuploads = $_FILES["file[]"];
	$File_tmpname = $_FILES["File"]["tmp_name"]
	$File_name = $_FILES["File"]["name"]
	$File_type = $_FILES["File"]["type"]
	$File_extension = substr($File_type,(sttrpos($File_type,"/")+1));
	$File_size = $_FILES["File"]["size"]
	
    if (isset($_POST['choice1']) && $_POST['choice1'] == '1') {
        move_uploaded_file($_FILES["file"]["tmp_name"],
		"upload/1/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/1/" . $_FILES["file"]["name"];
    } elseif (isset($_POST['choice1']) && $_POST['choice1'] == '2') {
         include('step2a.php');
    } elseif (isset($_POST['choice1']) && $_POST['choice1'] == '3') {
         include('step2a.php');
    } elseif (isset($_POST['choice1']) && $_POST['choice1'] == '4') {
         include('step2a.php');
    } elseif (isset($_POST['choice1']) && $_POST['choice1'] == '5') {
         include('step2a.php');
    } elseif (isset($_POST['choice1']) && $_POST['choice1'] == '6') {
         include('step2a.php');
    } elseif (isset($_POST['choice1']) && $_POST['choice1'] == '7') {
         include('step2a.php');
    } elseif (isset($_POST['choice1']) && $_POST['choice1'] == '8') {
         include('step2a.php');
    } elseif (isset($_POST['choice1']) && $_POST['choice1'] == '9') {
         include('step2a.php');
    } elseif (isset($_POST['choice1']) && $_POST['choice1'] == '10') {
         include('step2a.php');
    } else {
         include('error-state.php');
    }
//upload full path (Detect path automatically)
//if (!define('UPLOADDIR')) define('UPLOADDIR', (dirname(_FILE_)."/uploadfiles));
//if (is_uploaded_file($_FILES['File']['tmp_name'])  //ตรวจสอบไฟล์ upload

 ?>