<?php
 $no_wa = 6288276604008;
 $email = mazdaindonesia0@gmail.com
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://mazdabekasi0@gmail.com/php-email-form/
  */

  // Replace mazdaindonesia0@gmail.com with your real receiving email address
  $receiving_email_address = 'mazdaindonesia0@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $email = new PHP_Email_Form;
  $email->ajax = true;
  
  $email->to = $receiving_email_address;
  $email->from_name = $_POST['name'];
  $email->from_email = $_POST['email'];
  $email->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $email->smtp = mazdaindonesia0gmail.com(
    'host' => 'mazdaindonesia@gmail.com.com',
    'username' => 'mazda',
    'password' => 'pass',
    'port' => '+62'
  );
  */

  $php_email_form->add_message( $_POST['name'], 'From');
  $php_email_form->add_message( $_POST['email'], 'Email');
  $php_email_form->add_message( $_POST['message'], 'Message', 10);

  echo $mazdaindonesia0->send(hello);

?>
