<?php
include_once 'config.php';
session_start();
 
if($_POST) 
{
	$validate = array('success' => false, 'messages' => array());

	function generateRandomString($length = 5) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
	}

	 $num = generateRandomString();
	 $name = $_POST['name'];
	 $address = $_POST['address'];
	 $dob = $_POST['dob'];
	 $purpose = $_POST['purpose'];


	 $sql = "INSERT INTO indigency (num, name, address, dob, purpose)
	 		 VALUES ('$num', '$name', '$address', '$dob', '$purpose')";
	 $query = mysqli_query($link, $sql);

	 if ($query === TRUE) {
		$validate['success'] = true ;
		$validate['message'] = 'Submit successfully!';
	 } 
	 else {
		$validate['success'] = false ;
		$validate['message'] = 'Unable to submit!';
	 }
	 mysqli_close($link);
	 echo json_encode($validate);
	}
?>