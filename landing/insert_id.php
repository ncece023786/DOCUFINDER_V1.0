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

	 $id_num = generateRandomString();
	 $name = $_POST['name'];
	 $address = $_POST['address'];
	 $dob = $_POST['dob'];
	 $civil_status = $_POST['civil_status'];
	 $e_name = $_POST['e_name'];
	 $e_relationship = $_POST['e_relationship'];
	 $e_contact = $_POST['e_contact'];


	 $sql = "INSERT INTO barangay_id (id_num, name, address, dob, civil_status, e_name, e_relationship, e_contact)
	 		 VALUES ('$id_num', '$name', '$address', '$dob', '$civil_status', '$e_name', '$e_relationship', '$e_contact')";
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