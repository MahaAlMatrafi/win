<?php

$firstName=     $_POST['firstName'];
$lastName=      $_POST['lastName'];
$email=         $_POST['email'];
$erroors =[
    'firstNameError'=> '',
    'lastNameError'=> '',
    'emailError'=> '',
];
if (isset ($_POST['submit']))  {

// تحقق الاسم الاول 
         if (empty($firstName)){
            $erroors['firstNameError']= 'يرجى ادخال الاسم الاول';
         }
         /// تحقق الاسم الاخير 
         if(empty($lastName)){
            $erroors['lastNameError']= 'يرجى ادخال الاسم الاول';
          }
          /// تحقق الايميل 
             if (empty($email)){
                $erroors['emailError']= 'يرجى ادخال الايميل';
            }elseif(!filter_var($email,FILTER_VALIDATER_EMAIL)){
                $erroors['emailError']= 'يرجى ادخال الايميل';

                } 
                /// تحقق لا يوجد اخطاء 
                 if (!array_filter($erroors)){
                  $firstName=     mysqli_real_escape_string($conn,$_POST['firstName']);
                  $lastName=     mysqli_real_escape_string($conn,$_POST['lastName']);
                  $email=         mysqli_real_escape_string($conn,$_POST['email']);

            $sql = "INSERT INTO users(firstName,lastName,email)
             VALUES ('$firstName','$lastName',$email')";

          if (mysqli_query($conn,$sql)){
             header('Location:'. $_SERVER['PHP_SELF']);
     }else {
         echo 'Error: '. mysqli_error($conn);
       }
    }
}

?>