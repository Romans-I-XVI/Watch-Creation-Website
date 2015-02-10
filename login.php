<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['EmailAddress']))
{
     ?>
     <div><span><p>Welcome <?php echo $_SESSION['EmailAddress'];?> &nbsp;</p><a href="logout.php">logout</a></span></div>
      
     <?php
}
elseif(!empty($_POST['email']) && !empty($_POST['password']))
{
    $email = mysql_real_escape_string($_POST['email']);
    $password = md5(mysql_real_escape_string($_POST['password']));
     
    $checklogin = mysql_query("SELECT * FROM users WHERE EmailAddress = '".$email."' AND Password = '".$password."'");
     
    if(mysql_num_rows($checklogin) == 1)
    {
        $row = mysql_fetch_array($checklogin);
        $email = $row['EmailAddress'];
        $_SESSION['EmailAddress'] = $email;
        $_SESSION['LoggedIn'] = 1;
        $_SESSION['Product_0001'] = $row['Product_0001'];
        $_SESSION['Product_0002'] = $row['Product_0002'];
        $_SESSION['Product_0003'] = $row['Product_0003'];
		
        echo "<div><p>Working...</p></div>";
        echo "<meta http-equiv='refresh' content='=2;index.php' />";
    }
    else
    {
        echo "<h1>Error</h1>";
        echo "<p>Invalid email or password. Please <a href=\"index.php\">click here to try again</a>.</p>";
    }
}
else
{
    ?>
     
    <form method="post" action="index.php" name="loginform" id="loginform">
    <fieldset>
    	<label for="email">Email: </label><input type="text" name="email" id="email" />  &nbsp;
        <label for="password">Password: </label><input type="password" name="password" id="password" />
        <input type="submit" name="login" id="login" value="Login" />
    </fieldset>
    </form>
     
   <?php
}
?>
