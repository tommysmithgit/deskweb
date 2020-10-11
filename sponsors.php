<!DOCTYPE html>
<html lang="en">
<head>
  <title>FUFOHOUSE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <script src="button.js"></script>
  <link rel="stylesheet" href="vu.css">
  
  <link rel="stylesheet" href="login.css">
  
</head>
<body>


	  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  
      <a class="navbar-brand" href="index.php"><img class="wp-image-948 aligncenter" src="https://fufohouse.com.au/wp-content/uploads/2020/07/fufo-logo.png" alt="Fufohouse logo" width="32" height="32" /></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        
        <li><a href="#">Contact CUONG VU</a></li>
      </ul>
	  
	  
	  
	  
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="abc1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Indoor Active</h3>
          <p>Rhythm of The Day</p>
        </div>      
      </div>

      <div class="item">
        <img src="abc2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Outdoor Active</h3>
          <p>Friendly Environment</p>
        </div> 

	 
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
   <h3>Your Lovely Children</h3><br>
  
  <table id="baby">
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Day of Birth</th>
<th>Genger</th>
<th>Daily Message</th>
</tr>

  <?php
            include 'connection.php';
            $sql = "SELECT * FROM child";
            $result = $conn->query($sql);
			
            if ($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo 
					"<tr>
					<td>" .$row["given_name"]. "</td>
					<td>" .$row["family_name"]. "</td>
					<td>" .$row["dob"]. "</td>
					<td>" .$row["gender"]. "</td>
					<td>" .$row["daily_message"]. "</td>
					</tr>";
                   
                }
				
            }
        ?>
		
		</table>
  
  <br></br>
  
  <div class="row">
    <div class="col-sm-4">
      <img src="https://www.guardian.edu.au/wp-content/uploads/2020/09/Sydenham-2-530x298.jpg" class="img-responsive" style="width:100%" alt="Image">
      <h4>Indoor Classs</h4>
    </div>
    <div class="col-sm-4"> 
      <img src="https://www.guardian.edu.au/wp-content/uploads/2020/09/Sydenham-1-530x298.jpg" class="img-responsive" style="width:100%" alt="Image">
      <h4>Outdoor Playgroud</h4>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Parwinder
Centre Manager - 
"My favourite part about working with children is watching them grow and utilise the skills they learn in our care."</p>
      </div>
      <div class="well">
       <p>“Children are likely to live up to what you believe of them.”
  — Lady Bird Johnson, Former First Lady of the United States</p>
      </div>
    </div>
  </div>
</div><br>



<footer class="container-fluid text-center">
  

  
   <div>

		<iframe width="560" height="315" src="https://www.youtube.com/embed/nLsR0fGqhUs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
  <br> </br> 
  <img class="wp-image-948 aligncenter" src="https://fufohouse.com.au/wp-content/uploads/2020/07/fufo-logo.png" alt="Fufohouse logo" width="186" height="186" /><strong>If you need clarification or any special request, please do not hesitate to contact us.</strong>
  </div>
  
  <div>
 
  
  <input type="button" class="button" value="CALL: 0451 088 980" onclick="window.location.href = 'tel:0451088980';">
  

<input type="button" class="button" value="TXT:  0451 088 980" onclick="window.location.href = 'sms:0451088980&body=Hi%20VICFRESH%2C%20';">

<input type="button" class="button" value="EMAIL: info@fufohouse.com.au" onclick="window.location.href = 'mailto:info@fufohouse.com.au';">
</div>
  
</footer>

<a id="back2Top" title="Back to top" href="#">&#10148;</a>

</body>
</html>
