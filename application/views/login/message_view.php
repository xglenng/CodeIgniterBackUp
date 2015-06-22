<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
 
<head>    
    <title>Login Screen | Welcome </title>
</head>


<body class="body">
<?php include('login/navBar.php');  ?>
        <!-- Form -->
 <div class="container">
  <div class="container">
 <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4"><h2>Comments</h2>
<div id="after_submit"></div>
<form id="contact_form">

  <div class="form-group">
    <label class="required" for="name">Your name:</label>
    <input id="name" class="form-control" name="name" type="text" value="" placeholder="Enter your name">
    <span id="name_validation" class="error_message"></span>
  </div>

<!--  <div class="form-group">
    <label class="required" for="email">Your email:</label>
    <input id="email" class="form-control" name="email" type="email" value="" size="10" placeholder="Enter email">
  </div>-->
  
  <div class="form-group">
    <label class="required" for="message">Your message:</label><br />
    <textarea id="message" class="form-control" name="message" rows="10" cols="10"placeholder="Leave a Message"></textarea>
    <span id="message_validation" class="error_message"></span>
  </div>
    
    <button id="submit" type="button" class="btn btn-primary" onclick="saveComment()">Submit</button>
</form>
</div></div>
  <div class="col-md-4"></div>
</div>
    
    <p>&nbsp
        &nbsp</p>
        <p>&nbsp
        &nbsp</p>
    <?php include('login/footer.php');  ?>
</body>
</html>
</body>
</html>