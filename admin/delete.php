<?php include('conn.php');

	$sid=$_GET['id'];
	$query=mysqli_query($conn, "DELETE FROM `project` WHERE id='$sid'");
	if($query)
	{
		echo '<script type="text/javascript">; 
        alert("Delete successfully"); 
        window.location= "add_project.php";
        </script>';  
	}
	
?>