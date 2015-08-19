<!-- Bootstrap -->
     
     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
     <script src="https://maps.googleapis.com/maps/api/js"></script>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.css">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-social.less"> 
     <link rel="stylesheet" type="text/css" href="../../css/stylish.css">
     <link rel="stylesheet" type="text/css" href="../../css/font-awesome.css">
     <link rel="stylesheet" type="text/css" href="../../css/social-buttons.css">
     
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
          <li class="active"><a href="<?php echo site_url('home/index') ?>">Home</a></li>
          <li><a href="<?php echo site_url('home/view_messages') ?>">Contact Us Now</a></li>
          <li><a href="#">Our Services</a></li>       
              <!-- <li class="divider"></li> -->
              <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          
        </div>
        
      </form>
        
        
          <li><a href="#">Hunter Life</a></li>
          <li><a href="<?php echo site_url('home/view_news') ?>">News</a></li>       
          <li><a href="landowner.php">Land Owner Tags</a></li>       
          
              <!-- <li class="divider"></li> -->
        </ul>

        
      <div class="row">
       <td> <a href="<?php echo site_url('home/do_logout') ?>" class="btn btn-default">Logout</a></td>
      </div>

        
        
      </div>
    </div>    
  </div>
</div>
