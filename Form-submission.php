<!DOCTYPE html>
<html>
<head>
    <title>Form submission</title>
    </head>
    <body>
        <html>
    <head>
    <body>
        <h1>Form submission</h1>

        <?php
            $firstName = $lastName = "";
            $firstNameErr = $lastNameErr = "";
            $gender = $err_gender="";
            $dob  = $err_dob= "";
            $religion =  $err_religion="";
            $email = $err_email="";
            $username = $err_username="";
            $password = $err_password="";
            
              if($_SERVER['REQUEST_METHOD'] === "POST") {
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                if(empty($firstName)) 
                {
                    $firstNameErr = "First name is required!";
                    $flag = true;
                }
                if(empty($lastName)) 
                    {
                        $lastNameErr = "Last name is required!";
                        $flag = true;
                    }
            

               if (!isset($_POST["Gender"])){
                    $err_gender=   "Select a gender  ";
                }
                else{
                    if (isset($Gender) && $Gender=="Male"){
                        $gender=$_POST["Gender"];
                    }
                    else{
                        if (isset($Gender) && $Gender=="Female"){
                            $Gender=$_POST["Gender"];
                        }


                if(empty($_POST["Dob"])){
                    $err_dob="Select ";
                }
                
                else{
                    $dob=$_POST["Dob"];
                }
                   if(empty($_POST["Religion"])){
                    $err_Religion="Select ";
                }
                
                else{
                    $Religion=$_POST["Religion"];
                }
            }
           }     

              if($_SERVER['REQUEST_METHOD']== "POST"){

                if(empty($_POST["Email"])){
                    $err_Email="Email is required";
                        
                    }
                }
                else {
                    $Email=$_POST["Email"];
                }
                

               if(empty($_POST["username"])){
                    $err_uname="*Username is  Required*";
                }
                else if(strlen($_POST["username"])<8){
                    $err_uname="*Username should be at least 6 characters";
                }
                else{
                    $uname=$_POST["username"];
                }
                if(empty($_POST["password"])){
                    $err_password="*Password  is Required !";
                }
                else{
                    $password=$_POST["password"];
                
                }
            }
            

  ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
        method="post">
    <from action="/action_page.php">
        <fieldset>
            <legend><h2>Basic information:</h2></legend>
    <br>
    <label for="firstName">First Name<span style="color: red;">*</span>: </label>
    <input type="text" name="firstName" id="firstName">
    <span style="color: red;"><?php echo $firstNameErr; ?></span>
    <br><br>
    <label for="lastName">Last Name<span style="color: red;">*</span>: </label>
    <input type="text" name="lastName" id="lastName">
    <span style="color: red;"><?php echo $lastNameErr; ?></span>
    <br><br>
    <span>Gender</span>
        <td>:<input type="radio" value="<?php echo $Gender;?>" name="Gender">Male<input type="radio" value="<?php echo $Gender;?>" name="Gender">Female
            <span><?php echo $err_gender;?></span>
            <br><br>

     <label for="dob">Enter your date of birth</label>
    <input type="date" id="dob" name="dob">
    <br><br>

    <label>Religion</label>
    <select name="Religion">
        <option>Muslim</option>
        <option>Hindu</option>
        <option>Chiristian</option>
        <option>Budda</option>
    </select>
        <br><br>
    </fieldset>
    </form>    

        <fieldset>
            <legend><h2>Contract information:</h2></legend>
     <br><br>
    <label for="Present Address">Present Address:</label>
    <textarea id="textarea" name="Present Address"></textarea>
    <br><br>
    <label for="Permanent Address">Permanent Address:</label>
    <textarea id="textarea" name="Permanent Address"></textarea>
    <br><br>
    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone">
    <br><br>
    <label for="email">Email:</label>
    <input type="text" id="phone" name="phone">
    <br><br>
    <label for="personal website">personal website :</label>
    <a href="url">https://github.com/yasmin-soltana"</a>
    <br><br>

     </fieldset>
    </form>

   <fieldset>
    <legend>Account information:</legend>
      <form>
        <label for="username">username:</label>
         <td>:<input type="text" placeholder="Username" value="<?php echo $username;?>" name="username">
         <span><?php echo $err_username;?></span></td>
          <br><br>

          <label for="upassword">password:</label>
          <td>:<input type="password" placeholder="Password" value="<?php echo $password;?>" name="pass">
          <span><?php echo $err_password;?></span></td>
          <br><br>

         </fieldset>
         <input type="submit" value="Submit">

</form>
</body>
</html>
