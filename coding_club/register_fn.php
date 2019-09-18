<?php
	require_once 'config.php';

    if(ISSET($_POST['submit'])) 
    {
        $is_valid =  ISSET($_POST['firstname'], $_POST['lastname'], $_POST['mobilenumber'],$_POST['age'],$_POST['batch'],
                           $_POST['degree'],$_POST['collegename'],$_POST['register'],$_POST['companyname'],$_POST['designation'],
                           $_POST['location'],$_POST['email'],$_POST['pass']);
        // echo $_POST['firstname'];
                if($is_valid) 
                {
			        $new = $link->prepare("INSERT INTO users(firstname, lastname, mobilenumber, age,batch , degree,
                                         collegename, registernumber,companyname,designation,location,email,password)
                                         VALUES (?, ?, ? , ? , ? , ?, ?, ?, ?, ?, ?, ?,?)");
                     // echo $_POST['lastname'];
                }
                $hpass=password_hash($_POST['pass'],PASSWORD_DEFAULT);
        $new->bind_param("sssisssisssss",$_POST['firstname'], $_POST['lastname'], $_POST['mobilenumber'],  $_POST['age'],
                         $_POST['batch'],$_POST['degree'],$_POST['collegename'],$_POST['register'], $_POST['companyname'],$_POST['designation'],
                         $_POST['location'],$_POST['email'],$hpass);
        $new->execute();

        if($new->affected_rows>0)
        {            
            echo "success";
        }
        else    
            echo "failes";

	    // if (!$stmt->execute()) {
	  	// echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
        // }
        // else
        // {
        //     echo "User details added successfully.";
        // }
            
    }

?>