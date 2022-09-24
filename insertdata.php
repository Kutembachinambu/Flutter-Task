<?php 
	include "config.php";
	// REGISTER USER
	

	  
    $image = $_FILES['image']['name'];
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $DOB = $_POST['DOB'];
    $Occupation = $_POST['Occupation'];
    $Email = $_POST['Email'];

    $imagePath = "uploads/".$image;

    move_uploaded_file($_FILES['image']['tmp_name'],$imagePath);

	  
	 
	        $query = "INSERT INTO registeredUser (FirstName, Lastname, DOB, Occupation, image, Email) VALUES 
            ('".$Firstname."','".$Lastname."','".$DOB."','". $Occupation."', '".$image."', '". $Email."')";
          
	    $results = mysqli_query($connect, $query);
	    if($results>0)
	    {
	        echo "user added successfully";
	    }
	    
	    
	

	

	    
	    
	    ?>
