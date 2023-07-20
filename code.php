<?php
include("config.php");
if(isset($_POST['submit']))
{

    $sid   = $_POST['ID'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $conNum = $_POST['contactNum'];
   

    $data = [
        'ID' => $sid,
        'fname' => $fname,
        'lname' => $lname,
        'email' => $email,
        'contactNum' => $conNum,
        
    ];
   header("Location:add.php");
   $ref = "Student";
   $postdata = $database->getReference($ref)->push($data);

}

   
   
if(isset($_POST['delete']))
{
                
    $token = $_POST['ref_token_delete'];

    $ref = "Student/".$token;
    $delete_data = $database->getReference($ref)->remove();
            

header("Location:add.php");

}
        
if(isset($_POST['update']))
{
    $sid = $_POST['ID'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $conNum = $_POST['contactNum'];
    $token = $_POST['ref_token'];

    $data = [
        'ID' => $sid,
        'fname' => $fname,
        'lname' => $lname,
        'email' => $email,
        'contactNum' => $conNum,
        
    ];
   

    $ref = "Student/".$token;
    $postdata = $database->getReference($ref)->update($data);

    header("Location:add.php");
}


?>            
