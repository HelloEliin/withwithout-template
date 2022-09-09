<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hej</h1>

    <form method="post" action="<?php echo
    htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<?php $name ="";
      $email="";
      $number="";

      $nameErr="";
      $emailErr="";
      $numberErr=""; ?>

      <?php 
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $number = test_input($_POST["number"]);
      }


     if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
        } else {
          $name = test_input($_POST["name"]);  } 
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed"; 
        }
      
        if (empty($_POST["email"])) {
          $emailErr = "Email is required";
        } else {
          $email = test_input($_POST["email"]);

          }
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format"; 
        }
      
        if (empty($_POST["number"])) {
          $numberErr = "Number is required";
        } else {
          $number = test_input($_POST["number"]);
        } 
    } 

        ?>
    
    Name: <input type="text" name="name" id="inputOne" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span><br>
    Email: <input type="text" name="email" id="inputTwo"> 
    <span class="error">* <?php echo $emailErr;?></span><br>
    Phone number: <input type="number" name="number" id="inputThree">
    <span class="error">* <?php echo $numberErr;?></span>
    <input type="submit" value="submit" >

    </form>
</body>
</html>

<?php
    # Check if name and email fileds are empty
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['number'])){
        # If the fields are empty, display a message to the user
        echo " <br/> Please fill in the fields";
    # Process the form data if the input fields are not empty
    }else{
        $name= $_POST['name'];
        $email= $_POST['email'];
        $number= $_POST['number'];
        echo ('Your Name is:     '. $name. '<br/>');
        echo ('Your Email is:  '   . $email. '<br/>');
        echo ('Your Number is:  '   . $number. '<br/>');
    }

    
   
?>