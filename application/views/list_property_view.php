<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
 
<head>    
    <title>Login Screen | List Property </title>
</head>


<body class="body">
<?php include('login/navBar.php');  ?>


        <!-- Form -->

  <div class="container">
     <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4"><h2>List property</h2>

        <form id="contact_form" action='<?php echo base_url();?>home/post_property' method='post' name='process' class="form-horizontal" role="form">

              <div class="form-group">
                <label class="required" for="species">Species</label>
                <input id="species" class="form-control" name="name" type="text" value="" placeholder="Enter Species">
              </div>

              <div class="form-group">
                <label class="required" for="unit">Unit:</label><br />
                <input id="unit" class="form-control" name="unit" rows="10" cols="10"placeholder="Unit Number">
              </div>

              <div class="form-group">
                <label class="required" for="tags">Tags:</label><br />
                <input id="tags" class="form-control" name="tags" rows="10" cols="10"placeholder="Number of Tags">
              </div>

              <div class="form-group">
                <label class="required" for="tags">Price:</label><br />
                <input id="price" class="form-control" name="price" rows="10" cols="10"placeholder="Price">
              </div>

               <div class="form-group">
                <label class="required" for="lAgent">Location:</label><br />
                <input id="location" class="form-control" name="location" rows="10" cols="10"placeholder="location">
              </div>

              <div class="form-group">
                <label class="required" for="lAgent">Listing Agent:</label><br />
                <input id="listingAgent" class="form-control" name="lAgent" rows="10" cols="10"placeholder="Listing Agent">
              </div>
                
                <div class="col-sm-12 controls">
                                      
                                      
                                      <input id="btn-login" href="#" class="btn btn-success" Login type='Submit' value='Add Listing' />
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