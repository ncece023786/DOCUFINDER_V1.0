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

	 $blotter_num = generateRandomString();
	 $complainant = $_POST['complainant'];
	 $address1 = $_POST['address1'];
	 $dependant = $_POST['dependant'];
	 $address2 = $_POST['address2'];
	 $date_and_time1 = date ('Y-m-d H:i:s', strtotime ($_POST['date_and_time1']));
	 $narrated_by = $_POST['narrated_by'];
	 $narrative = $_POST['narrative'];


	 $sql = "INSERT INTO blotter (blotter_num, complainant, address1, dependant, address2, date_and_time1, narrated_by, narrative)
	 		 VALUES ('$blotter_num', '$complainant', '$address1', '$dependant', '$address2', '$date_and_time1', '$narrated_by', '$narrative')";
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