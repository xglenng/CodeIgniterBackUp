<!-- Bootstrap -->
     <link rel="stylesheet" type="text/css" href="css\stylish.css">
     <link rel="stylesheet" type="text/css" href="css\font-awesome.css">
     <link rel="stylesheet" type="text/css" href="css\social-buttons.css">
     <link rel="stylesheet" type="text/css" href="css\bootstrap.css">
     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
     <script src="https://maps.googleapis.com/maps/api/js"></script>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.css">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-social.less"> 
     
     <div class="navbar navbar-inverse">
      <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="../index.php">Tagged Out</a>
  </div>
  <div class="navbar-collapse collapse navbar-inverse-collapse">
    <div class="container-fluid">
      <div class="row">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="<?php echo site_url('home/view_messages') ?>">Contact Us Now</a></li>
          <li><a href="#">Our Services</a></li>       
              <!-- <li class="divider"></li> -->
              <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        </ul>
        </ul>
        <ul class="nav navbar-nav navbar-right">    

          <!-- Social Media --> 
        <a class="btn btn-social-icon btn-twitter">
         <i class="fa fa-twitter"></i>
         </a>
        <a class="btn btn-social-icon btn-instagram">
         <i class="fa fa-instagram"></i>
         </a>
        <a class="btn btn-social-icon btn-facebook">
         <i class="fa fa-facebook"></i>
         </a>
        <a class="btn btn-social-icon btn-pinterest">
         <i class="fa fa-pinterest"></i>
         </a>
    </ul>
        </div>
        
       <!-- Lower Part of Nav Bar -->
        <div class="inner-nav">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#">Hunter Life</a></li>
          <li><a href="#">Skills</a></li>
          <li><a href="#">News</a></li>       
          <li><a href="landowner.php">Land Owner Tags</a></li>       
          <li><a href="apparel.php">Apparel</a></li>       
              <!-- <li class="divider"></li> -->
        </ul>
      
      </div>
    </div>    
  </div>
</div>