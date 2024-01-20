<?php
 if(isset($_POST['submit']))
 {
	// Create connection to the database
	$conn = mysqli_connect("localhost","root","","signup_page");
	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	//store form data into the database
	$sql = "INSERT INTO signup_details (UserName,Email_ID,Password,ConfirmPassword) VALUES ('$_POST[username]','$_POST[email]','$_POST[password]','$_POST[confirm_password]')";
	if (mysqli_query($conn, $sql))
	{
		echo '<script>window.alert("Registered successfully")</script>';
		header("location:about.html");
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	//Close database connection
	mysqli_close($conn);
}
?>