
<html>
    <head>
    <link rel="stylesheet" href="style2.css">
</head>
    <?php
        $token = $_GET['token'];
        include("config.php");
        include("code.php");
                    
        
        $ref = "Student/";
        $getdata = $database->getReference($ref)->getChild($token)->getValue();
        ?>
        <body>
          <div>
            <form method="POST">
                    <input type="hidden" name="ref_token" value="<?php echo $token; ?>">
                    
                    <input type="text" name="ID"  value="<?php echo $getdata['ID']; ?>"><br><br>
                    <input type="text" name="fname" value="<?php echo $getdata['fname']; ?>"><br><br>
                    <input type="text" name="lname" value="<?php echo $getdata['lname']; ?>"><br><br>
                    <input type="text" name="email" value="<?php echo $getdata['email']; ?>"><br><br>
                    <input type="text" name="contactNum"  value="<?php echo $getdata['contactNum']; ?>"><br><br>
            </from>
                
            <form action="code.php" method="POST">
                
                    <button type="submit" name="update" >Update</button>
            </form>
                        
          </div>

        </body>
</html>
                