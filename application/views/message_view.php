<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
 
<head>    
    <title>Login Screen | Welcome </title>
</head>


<body class="body">
<?php include('login/navBar.php');  ?>


        <!-- Form -->

  <div class="container">
     <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4"><h2>Post A Comment</h2>

        <form id="contact_form" action='<?php echo base_url();?>home/post_message' method='post' name='process' class="form-horizontal" role="form">

              <div class="form-group">
                <label class="required" for="name">Your name:</label>
                <input id="name" class="form-control" name="name" type="text" value="" placeholder="Enter your name">
              </div>
              
              <div class="form-group">
                <label class="required" for="message">Your message:</label><br />
                <textarea id="message" class="form-control" name="message" rows="10" cols="10"placeholder="Leave a Message"></textarea>
              </div>
                
                <div class="col-sm-12 controls">
                                      
                                      
                                      <input id="btn-login" href="#" class="btn btn-success" Login type='Submit' value='Login' />
                                    </div>
                                </div>
        </form>
       </div>
      <div class="col-md-4"></div>
</div>
    
    <p>&nbsp
        &nbsp</p>
        <p>&nbsp
        &nbsp</p>
   
</body>
</html>
</body>
</html>