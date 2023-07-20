<!DOCTYPE html>
<html >
<?php
include("config.php");
?>
<head>
   
    <link rel="stylesheet" href="style2.css">
</head>
<body>
   
    
    <table>
        
        <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Contact Number</th>
        </tr>
        

        
            <?php
            

            $ref = "Student";

            $getdata = $database->getReference($ref)->getValue();
             $i = 0;
                if($getdata > 0)
                 {
                     foreach($getdata as $key => $row)
                        {
                          $i++;
              ?>          
             
                 <tr>
                     
                     <td><?php echo $row['ID']; ?></td>
                     <td><?php echo $row['fname']; ?></td>
                     <td><?php echo $row['lname']; ?></td>
                     <td><?php echo $row['email']; ?></td>
                     <td><?php echo $row['contactNum']; ?></td>
                     <td>
                        <a href="edit.php?token=<?php echo  $key ?>" ><button>Edit</button></a>
                    </td>
                     
                
                <td>
                <form action="code.php" method="POST">
                <input type="hidden" name="ref_token_delete" value="<?php echo $key; ?>">
                <button type="submit" name="delete" >Delete</button>
                
                   
                        
                </form>
                        </td>
                        </tr>
                        
                        <?php
                        }
                    }
                

                    
                    
           
                
                
            ?>
        
       
    </table>
                
    
</body>




</html>