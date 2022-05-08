<?php 

$fileDestination = "upload/";

$targetfile = $fileDestination . basename($_FILES['filetoUpload']['name']);

$filetype = pathinfo($targetfile, PATHINFO_EXTENSION);

if (isset($_POST['submit'])) {
	$check = getimagesize($_FILES['filetoUpload']['tmp_name']);
	if ($check !== false) { 
		if ($_FILES['filetoUpload']['size'] > 500000) {
			header("location: property_registration.php?error=fileIsTooBig");
		}
		else{
			$fileNameNew = uniqid('', true). "." .$targetfile;
		}
	}
	else{
		header("location: property_registration.php?error=Invalidfiletype");
	}

	if (file_exists($targetfile)) {
		header("location: property_registration.php?error=fileAlreadyExists");
	}

	if ($filetype != "jpg" && $filetype != "png" && $filetype != "jpeg") {
		header("location: property_registration.php?error=fileformatnotsupported");
	}
	else{
		if (move_uploaded_file($_FILES['filetoUpload']['tmp_name'], $targetfile)) {
			header("location: property_registration.php?error=success");
		}
		else
			header("location: property_registration.php?error=uploadfailed");
	}
}
 ?>