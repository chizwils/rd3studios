<?php
/*  $response = '';
  function my_contact_form_generate_response($type, $message){
    global $response;
    if($type =="success")$response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
  }
  $missing_content = "Please supply all contents";
  $invalid_email = "Please insert correct email";
  $message_unsent = "Message unsent. Please try again";
  $message_sent = "Message successfully sent";

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  //php mailer variable
  $to = get_option('admin_email');
  $subject = "Someone sent a mail from ". get_bloginfo("name");
  $headers = 'From: '. $email .'\r\n'. 'reply-To' . $email . "\r\n";

  //validate email
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    my_contact_form_generate_response('error',$invalid_email);
  }

  //validate presence of name and message
  if(empty($name) || empty($message)){
    my_contact_form_generate_response("error",$missing_content)
  }
  else{
    $sent = wp_mail($to, $subject, strip_tags($message), $headers);
    if($sent){
      my_contact_form_generate_response("success", $message_sent);

    }
    else{
      my_contact_form_generate_response("error", $message_unsent);

    }
  }
*/


?>
