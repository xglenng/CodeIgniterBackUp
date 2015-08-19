<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
 
<head>    
    <title>Login Screen | Welcome </title>
</head>


<body class="body">
<?php include('login/navBar.php');  ?>
<style>
p {text-indent: 50px;
  font-family: "Verdana";
  color: #808080;}
h2{color: orange}
</style>


        <!-- Form -->

  <div class="container-fluid">
    <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <h2> Hunt Life News</h2>
      </div>   
      <div class="row">
        <p> The hunting world is in constant movement. Between ever changing species behavior patterns and populations, shifts in rules and legislation, and new innovative technologies, it can be hard to keep up. Our team of seasoned journalists search the news daily to find the most important stories and keep you updated.</p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <h3> Rocky Moutain Sheep</h3>
      </div>   
      <div class="row">
        <p> 
        <a href="<?php echo site_url('home/sheep_news') ?>">
        <img border="0" alt="W3Schools" src="../../img/sheep.jpg" width="175" height="175"></a>

        Learn about Rocky Mounain Sheep
        </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <h3> Rocky Moutain Elk</h3>
      </div>   
      <div class="row">
        <p> 
        <a href="<?php echo site_url('home/elk_news') ?>">
        <img border="0" alt="W3Schools" src="../../img/elk.png" width="175" height="175"></a>

        Learn about Rocky Mounain Elk
        </p>
      </div>
    </div>
  </div>

    
    <p>&nbsp
        &nbsp</p>
        <p>&nbsp
        &nbsp</p>
   
</body>
</html>
</body>
</html>