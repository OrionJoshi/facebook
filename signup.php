  <?php
 


  $conn = mysqli_connect("localhost","root","","facebook_real") or die("Connection was not established");

  if(isset($_POST['fb-signup-button'])){
    $fname=htmlentities(mysqli_real_escape_string($conn,$_POST['fname']));
    $lname=htmlentities(mysqli_real_escape_string($conn,$_POST['lname']));

    $email=htmlentities(mysqli_real_escape_string($conn,$_POST['fb-email']));
    $pass=htmlentities(mysqli_real_escape_string($conn,$_POST['fb-password']));
    $month=htmlentities(mysqli_real_escape_string($conn,$_POST['fb-month']));
    $day=htmlentities(mysqli_real_escape_string($conn,$_POST['fb-day']));
    $year=htmlentities(mysqli_real_escape_string($conn,$_POST['fb-year']));
    $gender=htmlentities(mysqli_real_escape_string($conn,$_POST['fb-gender']));

  
    if($fname == ""){
      echo "<script> alert('We cannot verify your name')</script>";
    }
    if(strlen($pass)<8){
      echo "<script> alert('Password should be minimum 8 character')</script>";
      exit();
    }
    //for checking that if the email already exits or not

    $check_email = "SELECT * FROM users WHERE email = '$email'";
    
    $run_email = mysqli_query($conn,$check_email);
   

    $check = mysqli_num_rows($run_email);

    if($check >= 1){

      echo "<script> alert('Email already exits Please try again') </script>";
      echo "<script> window.open('fuck.php','_self')</script>";
      exit();
    }
    if($gender == "male" ){
      $profile_pic = "img/male.png";
    }else{
      $profile_pic = "img/female.png";
    }

    $birthdate = $year . "-".$month."-".$day;

      //$code=createRandomPassword();
    // code for creating verification code

    $chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
    srand((double)microtime()*1000000); 
    $i = 0; 
    $code = '' ; 

    while ($i <= 7) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $code = $code . $tmp; 
        $i++; 
    } 

    
    $insert = "INSERT INTO users(firstname,lastname,email,password,gender,profile_pic,birthdate,varfication_code) VALUES ('$fname','$lname','$email','$pass','$gender','$profile_pic','$birthdate','$code')";
    $query = mysqli_query($conn,$insert);

    if($query){

      echo "<script> alert('congratulation $name, your account has been successfuly created')</script>";
      echo "<script> window.open('fuck.php','_self')</script>";

    }else{
      echo "<script> alert('Registration Failed, Try again')</script>";

      echo "<script> window.open('fuck.php','_self')</script>";
    }
  }
?>
