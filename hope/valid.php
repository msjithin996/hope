<?php
session_start();
include_once('config.php'); 
if(isset($_POST['login'])){

echo $user=$_POST['username'];
echo $pass=$_POST['password'];
	
	
	$sql="SELECT type FROM login WHERE username='$user' and password='$pass'";
$query=mysql_query($sql,$dbcon);





	$insert="SELECT cid,cname,org,location,country,calamity FROM volunteers WHERE username='$user'";
$ins=mysql_query($insert) or die (mysql_error());



$rowz=mysql_fetch_row($ins);
	
 $cid=$rowz[0];
	$cname=$rowz[1];
 $org=$rowz[2];
	 $location=$rowz[3];
	$country=$rowz[4];
	 $calamity=$rowz[5];



$count=mysql_num_rows($query);
$row=mysql_fetch_row($query);
	echo $userid=$row[0];


	
if($count==1)
{


if($userid=='volunteer')
{
	
	$_SESSION['username']=$user;
	$_SESSION['cid']=$cid;
	$_SESSION['cname']=$cname;
	$_SESSION['org']=$org;
	$_SESSION['location']=$location;
	$_SESSION['country']=$country;
	$_SESSION['calamity']=$calamity;
	

	header("location:volunteer/index.html");


}


else if ($userid=='user')
{
		$_SESSION['username']=$user;

header("location:user/index.php");

}


}
else{
		
		echo"email or password is incorrect.<br>click here to <a href='index.html'>try again</a>";
}}
if(isset($_POST['register'])){


$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['gender'];
echo $age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$street=$_POST['street'];
$state=$_POST['state'];
$nation=$_POST['nation'];
$cid=$_POST['cid'];
$cname=$_POST['cname'];
$org=$_POST['org'];
$location=$_POST['location'];
$calamity=$_POST['calamity'];

$country=$_POST['country'];


$target_dir = "img/volunteerpic/";
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
	
	
	
	$insert_part="insert into volunteers values(NULL,'$name','$username','$gender','$age','$email','$phone','$address','$street','$state','$nation','$cid','$cname','$org','calamity','$location','$country','$image')";
$ins=mysql_query($insert_part) or die (mysql_error());

	$db="insert into login values(NULL,'$username','$password','volunteer')";
$login=mysql_query($db) or die (mysql_error());


echo "successfully entered";
header("Location: login.html");
	}




?>
