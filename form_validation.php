<style type="text/css">
  .error{
  color: red;
}
</style>

<?php 

 // define variables and set to empty values
$name_error = $Lastname_error = $id_error = $spec_error = $phone_error = $email_error = "";
$name = $Lastname = $id = $spec = $phone = $email = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"])) {
    $name_error = "First name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Only letters and white space allowed"; 
    }
  }

    if (empty($_POST["Lastname"])) {
    $Lastname_error = "Last name is required";
  } else {
    $Lastname = test_input($_POST["Lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Lastname)) {
      $Lastname_error = "Only letters and white space allowed"; 
    }
  }


if (empty($_POST["id"])) {
    $id_error = "ID# is required";
  } else {
    $id = test_input($_POST["id"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$id)) {
      $id_error = "Invalid ID"; 
    }
  }



  if (empty($_POST["spec"])) {
    $spec_error = "Specialization is required";
  } else {
    $spec = test_input($_POST["spec"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$spec)) {
      $spec_error = "Only letters and white space allowed"; 
    }
  }



if (empty($_POST["phone"])) {
    $phone_error = "Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)) {
      $phone_error = "Invalid phone number"; 
    }
  }



  if (empty($_POST["email"])) {
    $email_error = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format"; 
    }
  }
  
  


  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }
  
  if ($name_error == '' and $Lastname_error == '' and $email_error == '' and $phone_error == '' ){
      $message_body = '';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }
      
      // $to = 'vladi@clevertechie.com';
      // $subject = 'Contact Form Submit';
      // if (mail($to, $subject, $message)){
      //     $success = "Message sent, thank you for contacting us!";
      //     $name = $Lastname = $email = $phone = $message = '';
      // }
  }
  




if($name_error == '' and $Lastname_error == '' and $phone_error == '' and $email_error == '' and $spec_error == '' and $id_error == ''){
  alert("I am an alert box!"); 
}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}