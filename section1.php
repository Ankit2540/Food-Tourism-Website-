<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .div12{
            position: relative;
            margin-left: 2.5%;
            margin-right: 2.5%;
        }
        .w3-container
        {
            padding: 0.01em 16px;
            margin: 32px 0; 
            text-align: left;
            max-width: 100%;
        }
        .w3-container:after,
        .w3-container:before
        {
            content: "";
            display: block;
            clear: both
        }
        .w3-padding {
            padding-bottom: 20px !important
        }
        .w3-black{
            color: #fff !important;
            background-color: rgba(0, 0, 0, 0.5)
        }
        .w3-card{
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
        }
        .w3-input {
            padding: 8px;
            display: block;
            border: none;
            border-bottom: 1px solid #ccc;
            width: 100%;
            color: black;
        }
        ::placeholder{
            font-weight: bold;
        }
        .w3-border {
            border: 1px solid #ccc !important
        }
        .button{
            background-color: red;
            padding: 5px 5px 5px 5px;
            margin-top: 20px;
            color: white;
            border: none;
            font-size: 20px;
            max-width: max-content;
        }
        .button:hover{
            background-color: whitesmoke;
            color: black;
            border: none;
            
        }
                    .error {
                color: #1161ee;
            }
    </style>
</head>
<body>
        <?php  
    // define variables to empty values  
    $emailErr = "";  
    $email = "";  
    
    //Input fields validation  
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {  
        
        
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
    }  

    function input_data($data) 
    {  
        $data = trim($data);  
        $data = stripslashes($data);  
        $data = htmlspecialchars($data);  
        return $data;  
    }  
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="div12">
        <div class="w3-container w3-padding w3-black w3-card ">
            <h2>Get the best offers first!</h2>
            <p>Join our newsletter.</p>
            <label>E-mail   &nbsp;&nbsp;<span class="error"><?php echo $emailErr; ?> </span></label>
            <input class="w3-input w3-border" type="text" placeholder="Your Email address" name="email" id="email">
            <button type="submit" class="button">Subscribe</button>
        </div>
    </div>
    </form>
</body>
</html>