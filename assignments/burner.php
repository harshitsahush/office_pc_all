<?php
$name_err = '';
$email_err ='';


if ( isset($_POST['submit'] ) )
{
  $name = '';
  $email = '';
  if ( isset( $_POST['name'] ) && isset( $_POST['email'] ) ) 
  {
      $name = $_POST['name'];
      $email = $_POST['email'];
  }

  if ( ! empty( $name ) && ! empty($email) )
  {
      echo("hi $name. Your email is $email.");
      
  }

  else
  {
      if( empty ( $name ) ) 
      {
          $name_err = "Name cannot be empty!";
      }
      
      if( empty( $email ) ) 
      {
          $email_err = "Email cannot be empty!";
      }
      
  }
}
?>