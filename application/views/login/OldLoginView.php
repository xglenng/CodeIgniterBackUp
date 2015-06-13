<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
 
<head>    
    <title>Login Screen | Welcome </title>
</head>

<body class="body">
<div class="container-fluid">

<div class="row">
  <div class="col-md-4"><div id='login_form'>
        <form action='<?php echo base_url();?>login/process' method='post' name='process'>
            <h2>Admin Login</h2>
            <br />
            <?php if(! is_null($msg)) echo $msg;?>            
            <label for='username'>Username</label>
            <input type='text' name='username' id='username' size='25' /><br />
        
            <label for='password'>Password</label>
            <input type='password' name='password' id='password' size='25' /><br />                            
        
            <input type='Submit' value='Login' />            
        </form>

    </div></div>
  <div class="col-md-4"></div>
    

    
    
    <div class="col-md-4">
        <form action="login/registration" method="post">
            
                <legend>Register Form</legend>
                <div>
                    <input type="text" name="username" id="username" placeholder="User Name"/>
                </div>
        
                <div>
                    <input type="text" name="email" id="email" placeholder="Email"/>
                </div>
                <div>
                    <input type="password" name="password" placeholder="Password"/>
                </div>
                <div>
                    <input type="password" name="conpassword" placeholder="Confirm Password"/>
                </div>
                
                <input type="submit" name="submit" value="Register"/>
                <p><a href="index.php/login">Already have account</a>
           
               
        </form>
    </div>
</div>
    </div>
</body>
</html>