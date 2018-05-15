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
    
    if ($this -> checkUserName($username)){
      $errors["username"] = $errors["username"] . " " . "username already in use";
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
      $this -> errors = $errors;
      return false;
    }
    
  }
  
  public function checkUserName($username){
    // check if username is already in the db
    //true if it does exist, false if it doesn't
    $query = "SELECT username FROM accounts WHERE username = ?";
    $statement = $this -> connection -> prepare($query);
    $statement -> bind_param("s", $username);
    $statement -> execute();
    $result = $statement -> get_result();
    
    if ($result -> num_rows > 0){
      //username exists
      return true;
    }
    else {
      //username does not exist
      return false;
    }
  }
}
?>