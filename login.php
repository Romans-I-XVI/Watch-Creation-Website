<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['EmailAddress']))
{
     ?>
     <div><span><p>Welcome <?php echo $_SESSION['EmailAddress'];?> &nbsp;</p><a href="" onclick="logout()">logout</a></span></div>
      
     <?php
}
elseif(!empty($_POST['email']) && !empty($_POST['password']))
{
    $email = mysql_real_escape_string($_POST['email']);
    $password = md5(mysql_real_escape_string($_POST['password']));
     
    $checklogin = mysql_query("SELECT * FROM users WHERE EmailAddress = '".$email."' AND Password = '".$password."'");
     
    if(mysql_num_rows($checklogin) == 1)
    {
        $row = mysql_fetch_assoc($checklogin);
        $email = $row['EmailAddress'];
		$_SESSION['UserID'] = $row['UserID'];
        $_SESSION['EmailAddress'] = $email;
        $_SESSION['LoggedIn'] = 1;
		$_SESSION['UserArray'] = $row;
		$_SESSION['Products'] = array_slice($_SESSION['UserArray'], 3, count($_SESSION['UserArray']));

		
		
        echo "<div><span><p>Welcome ".$_SESSION['EmailAddress']." &nbsp;</p><a href='' onclick='logout()'>logout</a></span></div>";
    }
    else
    {
        echo "<p>Invalid email or password. Please <a href=\"index.php\">click here to try again</a>.</p>";
    }
}
else
{
    ?>
     
    <form method="post" action="#" name="loginform" id="loginform">
    <fieldset>
    	<label for="email">Email: </label><input type="text" name="email" id="email" />  &nbsp;
        <label for="password">Password: </label><input type="password" name="password" id="password" />
        <input type="submit" name="login" id="login" value="Login" />
    </fieldset>
    </form>
     
   <?php
}
?>
