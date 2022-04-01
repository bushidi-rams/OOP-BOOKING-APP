
<?php //if "email" variable is filled out, send email   
    if (isset($_REQUEST['email']))  {      //Email information   
$admin_email = "ramsbushidi@gmail.com";   
$email = $_REQUEST['email'];   
$subject = $_REQUEST['subject'];   
$comment = $_REQUEST['comment'];      
//send email   
mail($admin_email, "$subject", $comment, "From:" . $email);      
//Email response   
echo "Thank you for booking with us!";   }     
 //if "email" variable is not filled out, display the form   
    else  { ?>   
    
<form method="post">
Please enter your Email: <input name="email" type="text" />
Any Additional Requirement: <input name="subject" type="text" />
Message:
<textarea name="comment" rows="3" cols="20"></textarea>
<input type="submit" value="Submit" />   
</form>    
<?php  
        } 

?>
   