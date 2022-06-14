<?php
    
    if(isset($_POST['email']) && $_POST['email'] != ''){

        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

        //submit the form
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $message = $_POST['message'];


        $to = "huesdesignanddev@gmail.com";
        $body = "";

        $body .= "From: ".$userName. "\r\n";
        $body .= "Email: ".$to. "\r\n";
        $body .= "Message: ".$message. "\r\n";


        //mail($to,$messageSubject, $body);

        if (mail($to, $userName, $userEmail, $message))
            {
                header("location:thankyou.html");
            }
            else 
            {
                $invalid = "form-invalid";
            }

        }
    }
?>