<html>
<head>
	  
</head>

<body>

<?php include('navBar.php');  ?>

<script src="https://maps.googleapis.com/maps/api/js"></script>


    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li><a href="landowner.php">land-Owner-Tags</a></li>
    </ol>

<div class="panel panel-default">
  <div class="panel-body">
    <h2> Land Owners </h2>
  </div>
</div>

  <div class="row">   
    <div class="col-md-8"> 
      <div class="table table-bordered" style="height:500px; overflow: auto; display:block;">


        <table class="table table-bordered table-condensed tablesorter">
            <thead>
              <h2 align="center"> Utah Tags </h2>
                <tr>                    
                    <th>Species</th>
                    <th>Unit</th>
                    <th>Season</th>
                    <th>Tags</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>      
                
            </tbody>
        </table>
       
    </div>
    </div>
    <div class="col-md-4"> <div id="map-canvas"></div></div>
  </div> 

  
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(40.374413, -111.719669),
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>





<?php include('footer.php');  ?>

</body>
</html>