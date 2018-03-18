<?php
session_start();
include_once('../config.php'); 

echo $name=$_POST['name'];
echo $gender=$_POST['gender'];
echo $age=$_POST['age'];
echo $parent=$_POST['parent'];
echo $nationality=$_POST['nationality'];
//echo $image=$_POST['image'];
echo $campname=$_POST['campname'];
echo $campid=$_POST['campid'];
echo $organisation=$_POST['organisation'];
echo $location=$_POST['location'];
echo $country=$_POST['country'];
echo $contactnumber=$_POST['contactnumber'];

$target_dir = "uploads/";
$image= $_FILES["fileToUpload"]["name"];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
	
	
$sql="INSERT INTO `people`(`id`, `name`, `gender`, `age`, `pname`, `campname`, `nationality`, `organisation`, `location`, `country`, `contact number`,`image`) VALUES (NULL,'$name','$gender','$age','$parent','$campname','$nationality','$organisation','$location','$country','$contactnumber','$image')";
$query=mysql_query($sql,$dbcon);




?>
