<?php  


if (isset($_POST['num']) && isset($_POST['name'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['name']);
	$num = validate($_POST['num']);

	if (empty($uname) || empty($num)) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO test(num, num) VALUES('$num', '$name')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your message was sent successfully!";
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: index.html");
}