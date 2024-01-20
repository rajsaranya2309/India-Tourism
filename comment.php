<!--PHP code for storing form data into the database--> 
        <?php  
            if(isset($_POST['submit']))
			{  
                   // Create connection to the database
                    $conn = mysqli_connect("localhost","root","","comment_page");
                     if (!$conn) 
					 {
                        die("Connection failed: " . mysqli_connect_error());
                     }
                    //store form data into the database 
                    $sql = "INSERT INTO comment_details(comment) VALUES ('$_POST[comment]')";
                     if (mysqli_query($conn, $sql))
					 {
                        echo '<script>window.alert(" comments registered successfully")</script>'; 
								header("location:service.html");
                    
                    } else
					{
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
	        //Close database connection 
                    mysqli_close($conn);
            } 
                              
        ?>  
   