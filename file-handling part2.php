<!DOCTYPE html>

<?php
$ValidateFirstName = "";
$ValidateLastName = "";
$EmailValidation = "";
$GenderValidation = "";
$UserNameorIDValidation= "";
$PasswordValidation= "";
$RecoveryEmailValidation= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
   // $gender = $_REQUEST["gender"];
    $email = $_REQUEST["email"];
    $userId = $_REQUEST["userId"];
    $password = $_REQUEST["password"];
    $recoverEmail = $_REQUEST["recoverEmail"];
    

    if (empty($fname))
    {
        $ValidateFirstName = "you must enter your name";
    } 
    else
     {
        $ValidateFirstName = "your name is " . $fname;
    }

    if (empty($lname)) 
    {
        $ValidateLastName = "you must enter your name";
    }
     else {
        $ValidateLastName = "your name is " . $lname;
    }



    if (empty($email))
    {
        $EmailValidation = "you must enter your email";
    }
   
    else {
        $EmailValidation = "your email is " . $email;
    }


    if(!empty($_POST["radio"])) {
        echo "your gender is  " . $_POST["radio"];
    } else {
        echo "Please select the value.";
    }



    if(empty($userId))
    {
        $userId="enter an ID";
    }
    
    else
    {
        $userId="your id is" .$userId;
    }


    if(empty($password))
    {
        $PasswordValidation="enter valid password";
    }
    
    else
    {
        $PasswordValidation="password correct";
    }

    if(empty($recoverEmail))
    {
        $recoverEmail="enter an ID";
    }
    
    else
    {
        $recoverEmail="your id is" .$userId;
    }


}
?>

<html>
<form method="POST" 
action="loginpage.php">
  <head>
     <h1> Registration form</h1>
  </head>  
<body>
<form>	
    <fieldset>
        <legend>Basic Information:</legend>
    
      
     <table>		
           <tr>		
               	
               <td>				
                  Enter your firstname:			
               </td>			
                <td>				
                   <input type="text" name="fname" style="width: 250px;"> <?php echo $ValidateFirstName; ?>			
                </td>		
           </tr>



           <tr>		
               	
                   <td>				
                      Enter your lastname:			
                   </td>			
                    <td>				
                       <input type="text" name="lname" style="width: 250px;"><?php echo $ValidateLastName; ?>			
                    </td>		
               </tr>

            <tr>
                 <td>				
                   Gender:			
                 </td>			
                 <td>				
                    <input type="radio" id="male" name="gender" value="male"><?php echo $GenderValidation; ?>		
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female"><?php echo $GenderValidation; ?>
                      <label for="female">Female</label><br>	
                
                        
                 </td>		
           </tr>
           
           <tr>			
            <td>				
                Email:			
            </td>			
             <td>				
                <input type="email" name="email" style="width: 150px;"> <?php echo $EmailValidation; ?>		
             </td>		
        </tr>


     </table>
    </fieldset>



    <fieldset>
    <legend>Account Information</legend>

     <table>

        <tr>			
            <td>				
                User Name/User Id			
            </td>			
             <td>				
                <input type="text" name="userId">	  <?php echo $UserNameorIDValidation; ?>		
             </td>		
        </tr>


        <tr>			
            <td>				
                Password:			
            </td>			
             <td>				
                <input type="password" name="password">	  <?php echo $PasswordValidation; ?>		
             </td>		
        </tr>


        <tr>			
            <td>				
                Recovery email address:	  <?php echo $RecoveryEmailValidation; ?>		
            </td>			
             <td>				
                <input type="email" name="recoverEmail">			
             </td>		
        </tr>


        <table>

    <tr>		
         <button type="submit">Submit</button>	
        	      	


    </tr>


</table>

</form>

    </table>
</fieldset>

<?php
              
    if(isset($_POST['fname'])  )
{
$data=$_POST['fname'] . PHP_EOL;
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);

}

echo nl2br("One line.\nAnother line.");

if(isset($_POST['fname']) )
{
$data= $_POST['lname'].PHP_EOL;  
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

if(isset($_POST['gender']) )
{
$data= $_POST['gender'] . PHP_EOL; 
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

if(isset($_POST['email']) )
{
$data= $_POST['email'] . PHP_EOL;  ;

$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

if(isset($_POST['userId']) )
{
$data= $_POST['userId'] . PHP_EOL;  ;

$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

if(isset($_POST['password']) )
{
$data= $_POST['password'] . PHP_EOL;  ;

$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

if(isset($_POST['recoverEmail']) )
{
$data= $_POST['recoverEmail'] . PHP_EOL;  ;

$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}




?>
