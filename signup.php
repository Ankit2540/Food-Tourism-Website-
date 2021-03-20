<!DOCTYPE html>  
<html lang="en">  
    <head>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/alphardex/aqua.css@master/dist/aqua.min.css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" integrity="sha384-vuFJ2JiSdUpXLKGK+tDteQZBqNlMwAjhZ3TvPaDfN9QmbPb7Q8qUpbSNapQev3YF" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <style> 
            body{
                margin:0;
                color: #6363b6;
                background:#c8c8c8;
                font:600 16px/18px 'Open Sans',sans-serif;
            }
        </style>  
    </head>  
    <body>    
    
    <?php  
    // define variables to empty values  
    $nameErr = $emailErr = $mobilenoErr = $passwordErr = "";  
    $name = $email = $mobileno = $password = "";  
    
    //Input fields validation  
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {  
        
    //String Validation  
        if (empty($_POST["name"])) 
        {  
            $nameErr = "Name is required";  
        } 
        else 
        {  
            $name = input_data($_POST["name"]);  
                // check if name only contains letters and whitespace  
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
                {  
                    $nameErr = "Only alphabets and white space are allowed";  
                }  
        }  
        
        //Email Validation   
        if (empty($_POST["email"])) 
        {  
                $emailErr = "Email is required";  
        } 
        else 
        {  
                $email = input_data($_POST["email"]);  
                // check that the e-mail address is well-formed  
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                {  
                    $emailErr = "Invalid email format";  
                }  
        }  
        
        //Number Validation  
        if (empty($_POST["mobileno"])) 
        {  
                $mobilenoErr = "Mobile no is required";  
        } 
        else 
        {  
                $mobileno = input_data($_POST["mobileno"]);  
                // check if mobile no is well-formed  
                if (!preg_match ("/^[0-9]*$/", $mobileno) ) 
                {  
                $mobilenoErr = "Only numeric value is allowed.";  
                }  
            //check mobile no length should not be less and greator than 10  
            if (strlen ($mobileno) != 10) 
            {  
                $mobilenoErr = "Mobile no must contain 10 digits.";  
            }  
        }   
        
        //pasword validation
        if(empty($_POST["password"]))
        {
            $passwordErr = "Password is required";
        }
        else
        {
            $password = input_data($_POST["password"]);
        
            if( strlen($password ) > 20 ) {
            $passwordErr .= "Password too long!";
            }
            if( strlen($password ) < 8 ) {
            $passwordErr .= "Password too short!";
            }
            if( !preg_match("#[0-9]+#", $password ) ) {
            $passwordErr .= "Password must include at least one number!";
            }
            if( !preg_match("#[a-z]+#", $password ) ) {
            $passwordErr .= "Password must include at least one letter!";
            }
            if( !preg_match("#[A-Z]+#", $password ) ) {
            $passwordErr .= "Password must include at least one CAPS!";
            }
            if( !preg_match("#\W+#", $password ) ) {
            $passwordErr .= "Password must include at least one symbol!";
            }
        }
    }  

    function input_data($data) 
    {  
        $data = trim($data);  
        $data = stripslashes($data);  
        $data = htmlspecialchars($data);  
        return $data;  
    }  
    ?>
    <div class="container1">
                        <?php
                include "Header.html";
                ?>
    </div>
    <br><br><br>

    <div class="div0">
        <div class="div1">
            <h1 style="font-size: 50px;">Sign Up</h1><br>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form__group field">
                    <input type="text" class="form__field" placeholder="Name" name="name" id='name' req>
                    <label for="name" class="form__label">Name</label>
                    <span class="error"><?php echo $nameErr; ?> </span>
                </div><br>
                <div class="form__group field">
                    <input type="text" class="form__field" placeholder="Email" name="email" id='email' req>
                    <label for="email" class="form__label">Email</label>
                    <span class="error"><?php echo $emailErr; ?> </span>
                </div><br>
                <div class="form__group field">
                    <input type="text" class="form__field" placeholder="Mobile No." name="mobileno" id='mobileno' req>
                    <label for="mobileno" class="form__label">Mobile No.</label>
                    <span class="error"><?php echo $mobilenoErr; ?> </span>
                </div>
                <div class="form__group field">
                    <input type="password" class="form__field" placeholder="Mobile No." name="password" id='password' req>
                    <label for="mobileno" class="form__label">Password</label>
                    <span class="error"><?php echo $passwordErr; ?> </span>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-ghost" style="width:100%">Signup</button>                         
            </form>
            <br>
            <div class="grid">
                <div><hr class="line"></div>
                <div><h1 style="text-align:center; font-size:25px">Or Signup With</h1><br></div>
                <div><hr class="line"></div>
            </div>
            <br>
            
            <div style="align-items: center; text-align:center">
                <button class="btn btn-primary btn-ghost" ><i class="fab fa-facebook-f"></i></button>&nbsp;
                <button class="btn btn-primary btn-ghost" ><i class="fab fa-google"></i></button>&nbsp;
                <button class="btn btn-primary btn-ghost" ><i class="fab fa-twitter"></i></button>&nbsp;
                <button class="btn btn-primary btn-ghost" ><i class="far fa-envelope"></i></button><br><br><br><br>

                <a style="text-decoration: none; color:aliceblue" href="login.php"></h1>Already have a Account</h1></a>
            </div>

        </div>
    </div>
    <br>
            <div class="container1">
                        <?php
                include "footer.html";
                ?>
            </div>
    
    <?php  
        if(isset($_POST['submit'])) 
        {  
            if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "") 
            {  
                echo"<script>alert(Submitted Sucessfully);</script>";
            } 
            else 
            {  
                echo "<script>alert(You didn't filled up the form correctly);</script>";  
            }  
        }  
    ?>
    
    </body>  
</html>  