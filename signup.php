<?php



if(isset($_POST['name'])){
 $server = "sql12.freesqldatabase.com";
 $username = "sql12615263";
 $password = "5Aa5CF4PS4";
 $database = "sql12615263";

 

 $con = mysqli_connect($server, $username, $password, $database);

 if(!$con)
 {
    die("connecting to the data base is failed".mysqli_connect_error());
 }

//   echo "succesfully connect to this database"

 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $password = $_POST['password'];
 $confirm = $_POST['confirm'];
 
 
 
 $sql = "INSERT INTO  `sql12615263`.`signup` (`name`, `email`, `phone`, `password`,`confirm`) VALUES ('$name', '$email', '$phone', '$password', '$confirm'";
 
 //  echo $sql;
 
 
 
 if($password != $confirm)
 {
    echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>ERROR!</strong> Your confirm password is not same with the password you entered previous.            
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">             
      <span aria-hidden="true">&times;</span>
    </button>
    </div>';
 }
 
 else
 {
     if($con->query($sql))
            {
                
                //  echo "succesfully inserted";
                echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                       <strong>Congratulation!</strong> Your account is created successfully now login            
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">             
                         <span aria-hidden="true">&times;</span>
                       </button>
                       </div>';
            }
         
         else
         
            {
                echo "ERROR: $sql <br> $con -> ERROR";
            }
 
 
            
 
 }
 
 
 
 
 
 $con->close();
 }
 ?>
 
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <title>Sign Up</title>
     <link rel="stylesheet" href="sign-up.css">
 </head>
 <body>
 
 
 <header>
     <div class="container">
         <h1>Sign Up</h1>
         
         <form action="signup.php" method="post" >
             <label for="name">Name:</label>
             <input type="text" id="name" name="name"  required>
 
             <label for="email">Email:</label>
             <input type="email" id="email" name="email" required>
 
             <label for="phone">Ph No:</label>
             <input type="number" id="phone" name="phone"  required>
 
             <label for="password">Password:</label>
             <input type="password" id="password" name="password" required>
 
             <label for="confirm">Confirm Password:</label>
             <input type="password" id="confirm" name="confirm" required>
 
             <p class="log-in">if you already have a account please <a  href="http://localhost/openmasti/login.php" class="log" style="
                 color: red;
                 text-decoration: none;
                 background-color: transparent;
             " >Login</a></p>
 
             <button class="btn">Sign Up</button>
         </form>
     </div>
 
 </header>
 
     <footer>
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
         
 </footer>
 </body>
 </html>