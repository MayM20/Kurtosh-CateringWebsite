<?php
class Account extends Database{
  public function __construct(){
    parent::__construct();
  }
  public function register($username,$email,$password){
    $errors = array();
    //check the username
    if( strlen( trim($username) ) < 4 ){
      $errors["username"] = "at least 4 characters";
    }
    //validate the email
    if( filter_var($email, FILTER_VALIDATE_EMAIL ) == false ){
      $errors["email"] = "invalid email address";
    }
    //validate the password
    if( strlen( $password ) < 6 ){
      $errors["password"] = "password must be at least 6 characters";
    }
    
    if( count($errors) == 0 ){
      $query = 'INSERT INTO accounts 
      (username,email,password,created,lastseen)
      VALUES
      ( ?, ? , ?, NOW(), NOW() )';
      $statement = $this -> connection -> prepare( $query );
      //hash the password
      $hash = password_hash($password, PASSWORD_DEFAULT );
      //bind parameters
      $statement -> bind_param('sss', $username, $email, $hash );
      //execute query
      if( $statement -> execute() ){
        return true;
      }
      else{
        //database error
        return false;
      }
    }
    else{
      //process errors
    }
    
  }
}
?>