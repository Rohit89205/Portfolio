
<?php


if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['message'])){
    if(!empty($_POST['name']) && !empty($_POST['email'] && !empty($_POST['number'])) && !empty($_POST['message'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $message=$_POST['message'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Kindly provide valid email.';
        } else{
            $body="Name: $name.\n"."Email: $email.\n"."Contact Number: $number.\n"."Message: $message.\n";

            if(mail('rohit892051182@gmail.com','My Portfolio Response',$body,'From:codingworld1972@gmail.com')){
                echo 'Message Send Successfully';
            }else{
                echo 'error. Please Try Agin';
            }
        }
    }else{
        echo 'All Fill Are Required';
    }
}else{
    echo 'Please Fill The All Details';
}



?>

