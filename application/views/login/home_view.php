<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>  
  <script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(40.374413, -111.719669),
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP}
        var map = new google.maps.Map(mapCanvas, mapOptions)
        var myLatlng = new google.maps.LatLng(40.374413, -111.719669);
        var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Bull Elk!'
  });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body>
<?php include('navBar.php');  ?>
<style>
p {text-indent: 50px;
  font-family: "Verdana";
  color: #808080;}
h1{color: orange}
</style>


<div class="container">

   <!--  <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li><a href="landowner.php">land-Owner-Tags</a></li>
    </ol>
    -->
    <div class="page-header">
  <h1>Home: <small>Find a Tag</small></h1>
</div>
  

  <div class="row">   
    <div class="col-md-8"> 
      <div class="table table-bordered" style="height:500px; overflow: auto; display:block;">


        <table id="tableMain"class="table table-striped table-condensed table-hover tablesorter">
            <thead>
              <h2 align="center"> Utah Tags </h2>
                <tr> 
                    <th style="cursor:pointer">TagID</th>                   
                    <th style="cursor:pointer">Species</th>
                    <th style="cursor:pointer">Unit</th>
                    <th style="cursor:pointer">Season</th>
                    <th style="cursor:pointer">Tags</th>
                    <th style="cursor:pointer">Price</th>
                </tr>
            </thead>
            <tbody>      
                <?php foreach($posts as $post){?>
                 <tr>
                     <td style="cursor:pointer;" onclick="tableselection()"><?php echo $post->tagID;?></td>
                     <td style="cursor:pointer;" onclick="tableselection()"><?php echo $post->species;?> <p>Listed By: <?php echo $post->listingAgent;?></p></td>
                     <td style="cursor:pointer;" onclick="tableselection()"><?php echo $post->unit;?><p>Location: <?php echo $post->location;?></p></td>
                     <td style="cursor:pointer;" onclick="tableselection()"><?php echo $post->season;?></td>
                     <td style="cursor:pointer;" onclick="tableselection()"><?php echo $post->tags;?></td>
                     <td style="cursor:pointer;" onclick="tableselection()"><?php echo $post->price;?></td>
                  </tr>    
                 <?php }?> 

            </tbody>
        </table>
    </div>
  </div>
    <div class="col-md-4"> <div class="table table-bordered" style="height:500px; overflow: auto; display:block;"> <div id="map-canvas" style="width:400px;height:480px;"></div></div></div>
  </div> 
</div>

       <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirm Check Out</h4>
      </div>
        <div class="modal-body">
         <!-- Content Here -->
         <tbody>    
                 <tr>
                     <td ><?php echo $post->tagID;?></td>
                     <td><?php echo $post->species;?></td>
                     <td><?php echo $post->unit;?></td>
                     <td><?php echo $post->season;?></td>
                     <td><?php echo $post->tags;?></td>
                     <tdf><?php echo $post->price;?></td>
                  </tr>
            </tbody>
         </object>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Proceed</button>
      </div>
    </div>

  </div>
 </div>
</div>
<a href="<?php echo site_url('home/view_prop') ?>"><input id="btn-login" href="#" class="btn btn-success" Login type='Submit' value='Add Listing' /></a>
<!-- end of modal -->
<div class="page-footer">
  <p>Call Us <small>1(801)555-5555</small></p>
</div>
<script>
function sortTable(){
        $("#tableMain").tablesorter();
      }

function tableselection(){
$('#myModal').on('shown.bs.modal', function () {
  $('#tableMain').focus()
})
}
</script>
</body>
</html>